<?php

namespace App\Services\Admin\Member;

use App\Models\Country;
use App\Models\User;
use App\Models\ExceptionDate;
use App\Exports\MemberExcel;
use App\Services\Auth\AuthServices;
use App\Services\AppServices;
use App\Services\CommonServices;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

/**
 * Class MemberServices
 * @package App\Services
 */
class MemberServices extends AppServices
{
    public function listService(Request $request, string $case)
    {
        $this->data['country_list'] = Country::orderBy('sid')->get()->keyBy('sid');

        $li_page = $request->li_page ?? 20;

        $country = $request->country;
        $nationality = $request->nationality;
        $uid = $request->uid;
        $name = $request->name;
        $affiliation = $request->affiliation;
        $license_number = $request->license_number;


        switch ($case) {
            case 'withdrawal':
                $excelName = "signup-{$case}";
                $query = User::onlyTrashed()->orderByDesc('sid');
                break;

            case 'domestic':
                $excelName = "signup-{$case}";
                $query = User::where('country', '1')->orderByDesc('sid');
                break;
            case 'overseas':
                $excelName = "signup-{$case}";
                $query = User::whereNotIn('country', ['1'])->orderByDesc('sid');
                break;

            default:
                $excelName = 'signup';
                $query = User::orderByDesc('sid');
                break;
        }

        if ($country) {
            $query->where('country', $country);
        }
        if ($nationality) {
            $query->where('nationality', $nationality);
        }
        if ($uid) {
            $query->where('uid', 'like', "%{$uid}%");
        }
        if ($name) {
            $query->where(function($q) use($name) {
                $q->where('name_kr', 'like', "%{$name}%")
                    ->orWhereRaw("CONCAT(first_name, ' ', last_name) LIKE '%{$name}%'");
            });
        }
        if ($affiliation) {
            $query->where(function($q) use($affiliation) {
                $q->where('sosok_kr', 'like', "%{$affiliation}%")
                    ->orWhere('affi', 'like', "%{$affiliation}%");
            });
        }
        if ($license_number) {
            $query->where('license_number', 'like', "%{$license_number}%");
        }


        // 엑셀 다운로드 할때
        if ($request->excel) {
            $this->data['total'] = $query->count();
            $this->data['collection'] = $query->lazy();
            return (new CommonServices())->excelDownload(new MemberExcel($this->data), $excelName);
        }

        $list = $query->paginate($li_page)->appends($request->except(['page']));
        $this->data['list'] = setListSeq($list);
        $this->data['li_page'] = $li_page;

        return $this->data;
    }

    public function modifyService(Request $request)
    {
        $this->data = (new AuthServices())->signupAction($request);

        return $this->data;
    }

    public function exceptionDateService(Request $request)
    {
        $user_sid = explode(',', $request->user_sid);

        $this->data['user'] = User::withTrashed()->whereIn('sid', $user_sid)->get();

        // 회원 한명만 설정시 기존 기간 외 등록관리 정보 있으면 불러오기
        if ($request->case == 'one') {
            $this->data['exceptionDate'] = $this->data['user'][0]->myExceptionDate;
        }

        return $this->data;
    }

    public function dataAction(Request $request)
    {
        switch ($request->case) {
            case 'license-check':
                return $this->licenseCheckServices($request);

            case 'change-country':
                return (new AuthServices())->changeCountryServices($request);

            case 'user-modify':
                return $this->userUpdate($request);

            case 'user-delete':
                return $this->userDelete($request);

            case 'user-forceDelete':
                return $this->userForceDelete($request);

            case 'user-restore':
                return $this->userRestore($request);

            case 'user-login':
                return $this->userLogin($request);

            case 'pw-reset':
                return $this->passwordReset($request);

            case 'db-change':
                return $this->dbChange($request);

            case 'exception-date-create':
                return $this->exceptionDateCreate($request);

            case 'exception-date-update':
                return $this->exceptionDateUpdate($request);

            default:
                return notFoundRedirect();
        }
    }

    private function licenseCheckServices(Request $request)
    {
        $userExist = User::where(['license_number' => $request->license_number, 'del'=>'N'])->whereNotIn('sid',[$request->user_sid])->exists();

        if ($userExist) {
            $this->setJsonData('focus', '#license_number');

            return $this->returnJsonData('alert', [
                'msg' => 'This LicenseNumber is used. Please type in a new LicenseNumber',
            ]);
        } else {
            $this->setJsonData('data', [
                $this->ajaxActionData('#license_number', 'chk', 'Y'),
            ]);

            return $this->returnJsonData('alert', [
                'msg' => 'Available to use',
            ]);
        }
    }
    private function userUpdate(Request $request)
    {
        $this->transaction();

        try {
            $user = User::findOrFail($request->sid);
            $user->setByData($request);
            $user->agree = 'Y';

            $user->update();
            $this->dbCommit('관리자 - 회원정보 수정');

            return $this->returnJsonData('alert', [
                'case' => true,
                'msg' => '수정 되었습니다.',
                'winClose' => $this->ajaxActionWinClose(true),
            ]);
        } catch (\Exception $e) {
            return $this->dbRollback($e);
        }
    }

    private function userDelete(Request $request)
    {
        $this->transaction();

        try {
            $user = User::findOrFail($request->sid);
            $user->delete();

            $this->dbCommit('관리자 - 회원 삭제');

            return $this->returnJsonData('alert', [
                'case' => true,
                'msg' => '삭제 되었습니다.',
                'location' => $this->ajaxActionLocation('reload'),
            ]);
        } catch (\Exception $e) {
            return $this->dbRollback($e);
        }
    }

    private function userForceDelete(Request $request)
    {
        $this->transaction();

        try {
            $user = User::onlyTrashed()->findOrFail($request->sid);

            // 초록 접수내역 완전 삭제
//            foreach ($user->abstracts as $row) {
//                $row->authors()->forceDelete(); // Author 완전 삭제
//                $row->affiliations()->forceDelete(); // Affiliation 완전 삭제
//                $row->forceDelete(); // 초록 완전 삭제
//            }

            $user->forceDelete();


            $this->dbCommit('관리자 - 회원 완전 삭제');

            return $this->returnJsonData('alert', [
                'case' => true,
                'msg' => '완전히 삭제 되었습니다.',
                'location' => $this->ajaxActionLocation('reload'),
            ]);
        } catch (\Exception $e) {
            return $this->dbRollback($e);
        }
    }

    private function userRestore(Request $request)
    {
        $this->transaction();

        try {
            $user = User::onlyTrashed()->findOrFail($request->sid);

            if (User::where('uid', $user->uid)->exists()) {
                return $this->returnJsonData('alert', [
                    'msg' => '이미 사용중인 ID가 있습니다.',
                ]);
            }

            // 초록 접수내역 복원
//            foreach ($user->abstracts as $row) {
//                $row->restore(); // 초록 복원
//                $row->authors()->restore(); // Author 복원
//                $row->affiliations()->restore(); // Affiliation 복원
//            }

            $user->restore(); // 회원정보 복원

            $this->dbCommit('관리자 - 회원정보 복원');

            return $this->returnJsonData('alert', [
                'case' => true,
                'msg' => '복원 되었습니다.',
                'location' => $this->ajaxActionLocation('reload'),
            ]);
        } catch (\Exception $e) {
            return $this->dbRollback($e);
        }
    }

    private function userLogin(Request $request)
    {
        $user = User::findOrFail($request->sid);
        auth('web')->login($user);
        $ret_url = env("APP_URL").'/main';

        return $this->returnJsonData('location', $this->ajaxActionLocation('blank', $ret_url));
    }

    private function passwordReset(Request $request)
    {
        $this->transaction();

        try {
            $reset_pw = 'apkass2026';

            $user = User::withTrashed()->findOrFail($request->sid);
            $user->password = Hash::make($reset_pw);
            $user->update();

            $this->dbCommit('관리자 - 회원 비밀번호 초기화');

            return $this->returnJsonData('alert', [
                'msg' => "비밀번호 초기화 되었습니다.\n초기화 비밀번호 : {$reset_pw}"
            ]);
        } catch (\Exception $e) {
            return $this->dbRollback($e);
        }
    }

    private function dbChange(Request $request)
    {
        $this->transaction();

        try {
            $user = User::withTrashed()->findOrFail($request->sid);
            $user->{$request->field} = $request->value;
            $user->update();

            $this->dbCommit('관리자 회원정보 부분 수정');

            return $this->returnJsonData('alert', [
                'msg' => '수정 되었습니다.',
            ]);
        } catch (\Exception $e) {
            return $this->dbRollback($e);
        }
    }

    private function exceptionDateCreate(Request $request)
    {
        $this->transaction();

        try {
            $sidArr = $request->user_sid;

            foreach ($sidArr as $user_sid) {
                $data = [
                    'user_sid' => $user_sid,

                    'abs_yn' => $request->abs_yn,
                    'abs_sdate' => $request->abs_sdate,
                    'abs_edate' => $request->abs_edate,
                    'abs_round' => $request->abs_round,

                    'reg_yn' => $request->reg_yn,
                    'reg_sdate' => $request->reg_sdate,
                    'reg_edate' => $request->reg_edate,
                    'reg_round' => $request->reg_round,

                    'presentation_yn' => $request->presentation_yn,
                    'presentation_sdate' => $request->presentation_sdate,
                    'presentation_edate' => $request->presentation_edate,
                ];

                if (ExceptionDate::where('user_sid', $user_sid)->exists()) {
                    $exceptionDate = ExceptionDate::where('user_sid', $user_sid)->first();
                    $exceptionDate->setByData($data);
                    $exceptionDate->update();
                } else {
                    $exceptionDate = (new ExceptionDate());
                    $exceptionDate->setByData($data);
                    $exceptionDate->save();
                }
            }

            $this->dbCommit('관리자 기간외 등록관리 생성');

            return $this->returnJsonData('alert', [
                'case' => true,
                'msg' => '등록 되었습니다.',
                'winClose' => $this->ajaxActionWinClose(true),
            ]);
        } catch (\Exception $e) {
            return $this->dbRollback($e);
        }
    }

    private function exceptionDateUpdate(Request $request)
    {
        $this->transaction();

        try {
            $exceptionDate = ExceptionDate::where(['sid' => $request->sid , 'user_sid' => $request->user_sid[0]])->firstOrFail();
            $exceptionDate->setByData($request);
            $exceptionDate->update();

            $this->dbCommit('관리자 기간외 등록관리 수정');

            return $this->returnJsonData('alert', [
                'case' => true,
                'msg' => '수정 되었습니다.',
                'winClose' => $this->ajaxActionWinClose(true),
            ]);
        } catch (\Exception $e) {
            return $this->dbRollback($e);
        }
    }
}

