<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('layout/global_header') . view('page/index') . view('layout/global_footer'); 
    }
}
