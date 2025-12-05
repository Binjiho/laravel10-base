<?php

namespace App\Http\Controllers\Abstracts;

use App\Http\Controllers\Controller;
use App\Services\Abstracts\AbstractsServices;
use Illuminate\Http\Request;

class AbstractsController extends Controller
{
    private $abstractsServices;

    public function __construct()
    {
        $this->abstractsServices = (new AbstractsServices());

        view()->share([
            'userConfig' => getConfig('user'),
            'main_key' => 'M3',
        ]);
    }

    public function submission(Request $request)
    {
        view()->share([
            'sub_key' => 'S1',
        ]);
        return view('abstracts.submission', $this->abstractsServices->indexService($request));
    }
    public function awards(Request $request)
    {
        view()->share([
            'sub_key' => 'S2',
        ]);
        return view('abstracts.awards', $this->abstractsServices->indexService($request));
    }
    public function guideline(Request $request)
    {
        view()->share([
            'sub_key' => 'S3',
        ]);
        return view('abstracts.guideline', $this->abstractsServices->indexService($request));
    }

    public function data(Request $request)
    {
        return $this->abstractsServices->dataAction($request);
    }
}
