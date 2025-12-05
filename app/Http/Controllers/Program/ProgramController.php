<?php

namespace App\Http\Controllers\Program;

use App\Http\Controllers\Controller;
use App\Services\Program\ProgramServices;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    private $programServices;

    public function __construct()
    {
        $this->programServices = (new ProgramServices());

        view()->share([
            'userConfig' => getConfig('user'),
            'main_key' => 'M2',
        ]);
    }

    public function glance(Request $request)
    {
        view()->share([
            'sub_key' => 'S1',
        ]);
        return view('program.glance', $this->programServices->indexService($request));
    }

    public function scientific(Request $request)
    {
        view()->share([
            'sub_key' => 'S2',
        ]);
        return view('program.scientific', $this->programServices->indexService($request));
    }
    public function speaker(Request $request)
    {
        view()->share([
            'sub_key' => 'S3',
        ]);
        return view('program.speaker', $this->programServices->indexService($request));
    }
    public function event(Request $request)
    {
        view()->share([
            'sub_key' => 'S4',
        ]);
        return view('program.event', $this->programServices->indexService($request));
    }

    public function data(Request $request)
    {
        return $this->programServices->dataAction($request);
    }
}
