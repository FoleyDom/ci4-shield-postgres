<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Newsletter extends BaseController
{
    public function index()
    {
        return view('layout/global_header') . view('newsletter/newsletter') . view('layout/global_footer');
    }

    public function sign_up()
    {
        return view('layout/global_header') . view('newsletter/sign_up') . view('layout/global_footer');
    }
}
