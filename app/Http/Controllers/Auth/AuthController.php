<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\Auth\AuthServices;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    private $authServices;

    public function __construct()
    {
        $this->authServices = (new AuthServices());

        view()->share([
            'main_key' => 'GUEST',
            'userConfig' => getConfig('user'),
        ]);
    }

    public function signup(Request $request)
    {
        view()->share(['sub_key' => 'S4']);
        
        return response()
            ->view('auth.signup.index', $this->authServices->signupAction($request))
            ->header('Cache-Control', 'no-store, no-cache, must-revalidate');
    }

    public function complete(Request $request)
    {
        view()->share(['sub_key' => 'S4']);

        return response()
            ->view('auth.signup.complete', $this->authServices->signupAction($request));
    }

    public function forgetId(Request $request)
    {
        view()->share(['sub_key' => 'S2']);
        return view('auth.forgetId');
    }
    public function forgetPassword(Request $request)
    {
        view()->share(['sub_key' => 'S3']);
        return view('auth.forgetPassword');
    }

    public function data(Request $request)
    {
        return $this->authServices->dataAction($request);
    }
}
