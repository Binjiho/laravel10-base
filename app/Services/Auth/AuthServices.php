<?php

namespace App\Services\Auth;

use App\Models\User;
use App\Models\Country;
use App\Services\AppServices;
use App\Services\CommonServices;
use App\Services\MailRealSendServices;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

/**
 * Class AuthServices
 * @package App\Services
 */
class AuthServices extends AppServices
{
    public function signupAction(Request $request)
    {
        $this->data['captcha'] = (new CommonServices())->captchaMakeService();
        $this->data['country_list'] = Country::orderBy('sid')->get()->keyBy('sid');
//        $this->data['country_list'] = Country::orderBy('sid')->get();

        if(!empty($request->sid)){
            $this->data['user'] = User::findOrFail($request->sid);
        }
        return $this->data;
    }

    public function dataAction(Request $request)
    {
        switch ($request->case) {
            case 'user-create':
                return $this->userCreate($request);
            case 'uid-check':
                return $this->uidCheckServices($request);
            case 'license-check':
                return $this->licenseCheckServices($request);
            case 'captcha-compare':
                return $this->captchaCompareServices($request);
            case 'change-country':
                return $this->changeCountryServices($request);

            case 'forget-uid':
                return $this->forgetUid($request);
            case 'forget-password':
                return $this->forgetPassword($request);

            default:
                return notFoundRedirect();
        }
    }

    private function userCreate(Request $request)
    {
        $this->transaction();

        try {

//            // 현재 워크샵 코드 prefix (예: "CODE-")
//            $work_code_prefix = $workshop->code . "-";
//
//            // 가장 큰 번호 가져오기
//            $maxRnum = Registration::where('esid', $workshop->sid)
//                ->where('rnum', 'LIKE', "{$work_code_prefix}%")
//                ->max(\DB::raw("CAST(SUBSTRING(rnum, LENGTH('{$work_code_prefix}') + 1) AS UNSIGNED)"));
//
//            // 다음 번호 계산 (없으면 1부터 시작)
//            $nextNumber = ($maxRnum ?? 0) + 1;
//
//            // 자리수 맞춰서 등록번호 생성 (3자리 고정)
//            $rnum = $work_code_prefix . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);
//
//            // 생성된 regnum을 request에 추가
//            $request->merge(['rnum' => $rnum]);

            $user = new User();
            $user->setByData($request);
            $user->save();

            // 회원가입 메일 발송
            $mailData = [
                'receiver_name' => $user->first_name.' '.$user->last_name,
                'receiver_email' => $user->uid,
                'body' => view("template.mail-signup", ['user' => $user])->render(),
            ];

            $mailResult = (new MailRealSendServices())->mailSendService($mailData, 'signup');

            if ($mailResult !== 'suc') {
                return $mailResult;
            }
            // END 회원가입 메일 발송

            $this->dbCommit('사용자 - 회원가입 완료');

            return $this->returnJsonData('location', $this->ajaxActionLocation('replace', route('auth.complete',['sid'=>$user->sid])));
        } catch (\Exception $e) {
            return $this->dbRollback($e);
        }
    }

    private function uidCheckServices(Request $request)
    {
        $user = User::where(['uid' => $request->id, 'del'=>'N'])->first();

        if (empty($user)) {
            $this->setJsonData('data', [
                $this->ajaxActionData('#uid', 'chk', 'Y'),
            ]);

            return $this->returnJsonData('alert', [
                'msg' => 'Available to use',
            ]);
        } else {
            $this->setJsonData('focus', '#uid');

            return $this->returnJsonData('alert', [
                'msg' => 'This ID is used. Please type in a new ID',
            ]);
        }
    }

    private function licenseCheckServices(Request $request)
    {
        $user = User::where(['license_number' => $request->license_number, 'del'=>'N'])->first();

        if (empty($user)) {
            $this->setJsonData('data', [
                $this->ajaxActionData('#license_number', 'chk', 'Y'),
            ]);

            return $this->returnJsonData('alert', [
                'msg' => '사용 가능한 의사면허번호입니다.',
            ]);
        } else {
            $this->setJsonData('focus', '#license_number');

            return $this->returnJsonData('alert', [
                'msg' => '이미 사용된 의사면허번호입니다.',
            ]);
        }
    }

    private function captchaCompareServices(Request $request)
    {
        if($request->captcha_input === session('captcha')){
            $this->setJsonData('log', 'suc');

            $this->setJsonData('data', [
                $this->ajaxActionData('#captcha_input', 'chk', 'Y'),
                'log' => 'suc',
            ]);

            return $this->returnJson();
        }
        $this->setJsonData('data', [
            $this->ajaxActionData('#captcha_input', 'chk', 'N'),
            'log' => 'fail',
        ]);

        return $this->returnJson();
    }

    public function changeCountryServices(Request $request)
    {
        if(empty($request->country)){
            $this->setJsonData('input', [
                $this->ajaxActionInput('#register-frm input[name=ccode]', ''),
            ]);

            return $this->returnJson();
        }

        $country = Country::findOrFail($request->country);

        $this->setJsonData('input', [
            $this->ajaxActionInput('#register-frm input[name=ccode]', $country['code']),
        ]);

        return $this->returnJson();
    }


    private function forgetUid(Request $request)
    {
        $user = User::where('last_name', $request->last_name)
            ->whereRaw("RIGHT(mobile, 4) = ?", [$request->mobile]) // <-- 이 부분이 수정되었습니다.
            ->where('del', 'N')
            ->first();

//        // 휴대폰번호 마지막 4자리 추출
//        $mobile     = preg_replace('/[^0-9]/', '', $user->mobile);
//        $lastFour   = substr($mobile, -4);
//
//        if ($lastFour != $request->mobile) {
//            return $this->returnJsonData('alert', [
//                'msg' => 'The mobile you entered is incorrect. Please try again',
//            ]);
//        }

        if(!empty($user)){
            $this->setJsonData('addCss', [
                $this->ajaxActionCss('.result-conbox', 'display', 'block'),
            ]);

            $html = "Your ID (E-Mail) : <span class=\"text-blue\">".$user->uid."</span> ";

            return $this->returnJsonData('html', [
                $this->ajaxActionHtml('#result_text', $html),
            ]);
        }else{
            return $this->returnJsonData('alert', [
                'msg' => 'Please check that the information you entered is accurate.',
            ]);
        }
    }

    private function forgetPassword(Request $request)
    {
        $user = User::where(['uid'=>$request->uid, 'del'=>'N'])->first();

        if (empty($user)) {

            return $this->returnJsonData('result', [
                'res' => 'NOT',
                'msg' => 'The ID(E-mail) you entered is incorrect. Please try again',
            ]);

        } else {

            $this->transaction();

            try {
                $tempPassword = $this->tempPassword();

                $user->password = Hash::make($tempPassword);
                $user->imsi_password = 'Y';
                $user->password_at = date('Y-m-d H:i:s');
                $user->update();
                
                $user->tempPassword = $tempPassword;

                // 임시비밀번호 메일 발송
                $mailData = [
                    'receiver_name' => $user->first_name.' '.$user->last_name,
                    'receiver_email' => $user->uid,
                    'body' => view("template.forget-password", ['user' => $user, 'tempPassword'=>$tempPassword])->render(),
                ];

                $mailResult = (new MailRealSendServices())->mailSendService($mailData, 'forget-password');

                if ($mailResult != 'suc') {
                    return $mailResult;
                }

                $this->dbCommit('사용자 - 임시비밀번호 변경');


                return $this->returnJsonData('result', [
                    'res' => 'SUC',
                    'msg' => "Your Password has been sent to ".$user->uid,
                    'tempPassword' => $tempPassword,
                ]);

            } catch (\Exception $e) {
                return $this->dbRollback($e);
            }
        }
    }

    private function tempPassword()
    {
        $feed1 = "0123456789";
        $feed2 = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $tempPassword = '';

        for ($i = 0; $i < 3; $i++) {
            $tempPassword .= substr($feed1, rand(0, strlen($feed1) - 1), 1);
        }

        for ($i = 0; $i < 3; $i++) {
            $tempPassword .= substr($feed2, rand(0, strlen($feed2) - 1), 1);
        }

        return str_shuffle($tempPassword);
    }
}
