<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
//use App\Services\About\AboutServices;
use Illuminate\Http\Request;

class AboutController extends Controller
{
//    private $aboutServices;

    public function __construct()
    {
//        $this->aboutServices = (new AboutServices());

        view()->share([
            'userConfig' => getConfig('user'),
            'main_key' => 'M1',
        ]);
    }

    public function welcome(Request $request)
    {
        view()->share([
            'sub_key' => 'S1',
        ]);
        return view('about.welcome');
    }
    public function committee(Request $request)
    {
        view()->share([
            'sub_key' => 'S2',
        ]);
        return view('about.committee');
    }
    public function overview(Request $request)
    {
        view()->share([
            'sub_key' => 'S3',
        ]);
        return view('about.overview');
    }
    public function contact(Request $request)
    {
        view()->share([
            'sub_key' => 'S4',
        ]);
        return view('about.contact');
    }

//    public function data(Request $request)
//    {
//        return $this->mypageServices->dataAction($request);
//    }
}
