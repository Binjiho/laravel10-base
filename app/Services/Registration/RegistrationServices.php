<?php

namespace App\Services\Registration;

use App\Models\Country;
use App\Models\User;
use App\Services\AppServices;
use App\Services\CommonServices;
use App\Services\NicePay\NicePayServices;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

/**
 * Class RegistrationServices
 * @package App\Services
 */
class RegistrationServices extends AppServices
{
    public function indexService(Request $request)
    {
        return $this->data;
    }

    public function dataAction(Request $request)
    {
        switch ($request->case) {
            case 'user-modify':
                return $this->userUpdate($request);
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

}
