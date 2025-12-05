<?php

namespace App\Http\Controllers\Accommodation;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AccommodationController extends Controller
{
    public function __construct()
    {
        view()->share([
            'userConfig' => getConfig('user'),
            'main_key' => 'M5',
        ]);
    }

    public function acc(Request $request)
    {
        view()->share([
            'sub_key' => 'S1',
        ]);
        return view('accommodation.acc');
    }

}
