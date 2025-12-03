<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
//use App\Services\Information\InformationServices;
use Illuminate\Http\Request;

class InformationController extends Controller
{
//    private $informationServices;

    public function __construct()
    {
//        $this->informationServices = (new InformationServices());

        view()->share([
            'userConfig' => getConfig('user'),
            'main_key' => 'M7',
        ]);
    }

    public function venue(Request $request)
    {
        view()->share([
            'sub_key' => 'S1',
        ]);
        return view('information.venue');
    }
    public function transportation(Request $request)
    {
        view()->share([
            'sub_key' => 'S2',
        ]);
        if(!empty($request->tab)){
            return view('information.transportation2');
        }
        return view('information.transportation');
    }
    public function tour(Request $request)
    {
        view()->share([
            'sub_key' => 'S3',
        ]);
        return view('information.tour');
    }
    public function useful(Request $request)
    {
        view()->share([
            'sub_key' => 'S4',
        ]);
        return view('information.useful');
    }
    public function incheon(Request $request)
    {
        view()->share([
            'sub_key' => 'S5',
        ]);
        return view('information.incheon');
    }
    public function korea(Request $request)
    {
        view()->share([
            'sub_key' => 'S6',
        ]);
        return view('information.korea');
    }


//    public function data(Request $request)
//    {
//        return $this->mypageServices->dataAction($request);
//    }
}
