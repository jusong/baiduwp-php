<?php

namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    static $version = '1.0.0';

    public function index()
    {
        return view('index/index', [
            'site_name' => config('baiduwp.site_name'),
            'program_version' => config('baiduwp.program_version'),
            'footer' => config('baiduwp.footer'),
        ]);
    }
}
