<?php

namespace App\Http\Controllers\Sponsor;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SponsorController extends Controller
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
        return view('sponsor.opp');
    }
    public function our(Request $request)
    {
        return view('sponsor.our');
    }
}
