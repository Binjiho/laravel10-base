<?php

namespace App\Http\Controllers\Sponsorship;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SponsorshipController extends Controller
{
    public function __construct()
    {
        view()->share([
            'userConfig' => getConfig('user'),
            'main_key' => 'M6',
        ]);
    }

    public function opp(Request $request)
    {
        view()->share([
            'sub_key' => 'S1',
        ]);
        return view('sponsorship.opp');
    }
    public function our(Request $request)
    {
        view()->share([
            'sub_key' => 'S2',
        ]);
        return view('sponsorship.our');
    }
}
