<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data =
        [
          'tab_title' => 'Home'
        ];
        return view('layout/global_header',  $data) . view('page/index') . view('layout/global_footer'); 
    }
}
