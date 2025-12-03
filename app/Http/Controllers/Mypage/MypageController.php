<?php

namespace App\Http\Controllers\Mypage;

use App\Http\Controllers\Controller;
use App\Services\Mypage\MypageServices;
use Illuminate\Http\Request;

class MypageController extends Controller
{
    private $mypageServices;

    public function __construct()
    {
        $this->mypageServices = (new MypageServices());

        view()->share([
            'userConfig' => getConfig('user'),
            'main_key' => 'MYPAGE',
        ]);
    }

    public function index(Request $request)
    {
        view()->share([
            'sub_key' => 'S1',
        ]);
        return view('mypage.index', $this->mypageServices->indexService($request));
    }

    public function personal(Request $request)
    {
        view()->share([
            'sub_key' => 'S2',
        ]);
        return view('mypage.personal', $this->mypageServices->indexService($request));
    }

    public function modify(Request $request)
    {
        view()->share([
            'sub_key' => 'S2',
        ]);
        return view('mypage.modify', $this->mypageServices->indexService($request));
    }

    public function registration(Request $request)
    {
        view()->share([
            'sub_key' => 'S3',
        ]);
        return view('mypage.registration', $this->mypageServices->indexService($request));
    }

    public function abstract(Request $request)
    {
        view()->share([
            'sub_key' => 'S4',
        ]);
        return view('mypage.abstract', $this->mypageServices->indexService($request));
    }


    public function data(Request $request)
    {
        return $this->mypageServices->dataAction($request);
    }
}
