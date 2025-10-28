<?php

namespace App\controllers;

abstract class BaseController
{
  protected function view($view_name, $data = [])
  {
    // extracts associative array into variables
    extract($data);
    require "src/views/$view_name.php";
  }
}
