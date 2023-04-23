<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class About extends BaseController
{
  public function index()
  {
    return view('layout/global_header') . view('about_page/about') . view('layout/global_footer'); 
  }
  
}