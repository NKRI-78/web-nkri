<?php

namespace App\Controllers\Home;

use App\Controllers\Base\BaseController;
use Config\Services;

class Home extends BaseController
{
  public function index()
  {
    return view("home/index");
  }
}
