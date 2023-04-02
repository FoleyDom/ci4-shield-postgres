<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class About extends BaseController
{
  public function index()
  {
    return view('layout/global_header') . view('about_page/about') . view('layout/global_footer'); 
  }

  public function views($page = 'home')
  {
    if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
      // Whoops, we don't have a page for that!
      throw new PageNotFoundException($page);
    }

    return view('pages/');
  }
  
}