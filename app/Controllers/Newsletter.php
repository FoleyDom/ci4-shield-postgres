<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Newsletter extends BaseController
{
    public function index()
    {
        $data =
        [
          'tab_title' => 'Newsletter'
        ];
        return view('layout/global_header', $data) . view('newsletter/newsletter') . view('layout/global_footer');
    }

    public function sign_up()
    {
        $data =
        [
          'tab_title' => 'About'
        ];
        return view('layout/global_header',  $data) . view('newsletter/sign_up') . view('layout/global_footer');
    }
}
