<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class About extends BaseController
{
  public function index()
  {
    if ($user->can('user')) {
      $data =
        [
          'tab_title' => 'About'
        ];

      return view('layout/global_header', $data) . view('about_page/about') . view('layout/global_footer');
    }
  }
}
