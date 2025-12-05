<?php

namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;
use App\Services\Registration\RegistrationServices;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    private $registrationServices;

    public function __construct()
    {
        $this->registrationServices = (new RegistrationServices());

        view()->share([
            'userConfig' => getConfig('user'),
            'main_key' => 'M4',
        ]);
    }

    public function guideline(Request $request)
    {
        view()->share([
            'sub_key' => 'S1',
        ]);
        return view('registration.guideline', $this->registrationServices->indexService($request));
    }

    public function online(Request $request)
    {
        view()->share([
            'sub_key' => 'S2',
        ]);
        return view('registration.online', $this->registrationServices->indexService($request));
    }

    public function visa(Request $request)
    {
        view()->share([
            'sub_key' => 'S3',
        ]);
        return view('registration.visa', $this->registrationServices->indexService($request));
    }


    public function data(Request $request)
    {
        return $this->registrationServices->dataAction($request);
    }
}
