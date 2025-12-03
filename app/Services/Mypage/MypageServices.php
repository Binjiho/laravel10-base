<?php

namespace App\Services\Mypage;

use App\Models\Country;
use App\Models\User;
use App\Services\AppServices;
use App\Services\CommonServices;
use App\Services\NicePay\NicePayServices;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

/**
 * Class MypageServices
 * @package App\Services
 */
class MypageServices extends AppServices
{
    public function indexService(Request $request)
    {
        $this->data['captcha'] = (new CommonServices())->captchaMakeService();
        $this->data['country_list'] = Country::get()->keyBy('sid');
        $this->data['user'] = thisUser();
        return $this->data;
    }

    public function dataAction(Request $request)
    {
        switch ($request->case) {
            case 'user-modify':
                return $this->userUpdate($request);
            case 'captcha-compare':
                return $this->captchaCompareServices($request);
            default:
                return notFoundRedirect();
        }
    }

    private function userUpdate(Request $request)
    {
        $this->transaction();

        try {
            $user = thisUser();
            $user->setByModifyData($request);
            $user->update();

            $this->dbCommit('사용자 - 회원정보 수정');

            return $this->returnJsonData('alert', [
                'case' => true,
                'msg' => '수정 되었습니다.',
                'location' => $this->ajaxActionLocation('replace', route('mypage.personal')),
            ]);
        } catch (\Exception $e) {
            return $this->dbRollback($e);
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
}
