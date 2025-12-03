<?php

namespace App\Http\Controllers\Admin\Member;

use App\Http\Controllers\Controller;
use App\Services\Admin\Member\MemberServices;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    private $memberServices;

    public function __construct()
    {
        $this->memberServices = (new MemberServices());

        view()->share([
            'userConfig' => getConfig('user'),
            'main_key' => 'M1',
        ]);
    }

    public function index(Request $request)
    {
        switch ($request->route()->getName()) {
            case 'member.withdrawal':
                return view('admin.member.withdrawal', $this->memberServices->listService($request, 'withdrawal'));

            case 'member.domestic':
                return view('admin.member.index', $this->memberServices->listService($request, 'domestic'));

            case 'member.overseas':
                return view('admin.member.index', $this->memberServices->listService($request, 'overseas'));

            default:
                return view('admin.member.index', $this->memberServices->listService($request, 'all'));
        }
    }

    public function modify(Request $request)
    {
        return view('admin.member.modify', $this->memberServices->modifyService($request));
    }

    public function exceptionDate(Request $request)
    {
        if (empty($request->user_sid)) {
            return notFoundRedirect();
        }
        
        return view('admin.member.exception-date', $this->memberServices->exceptionDateService($request));
    }

    public function excel(Request $request)
    {
        $case = $request->case;
        $request->merge(['excel' => true]);

        switch ($case) {
            case 'withdrawal':
            case 'domestic':
            case 'overseas':
                return $this->memberServices->listService($request, $case);

            default:
                return $this->memberServices->listService($request, 'all');
        }
    }

    public function data(Request $request)
    {
        return $this->memberServices->dataAction($request);
    }
}
