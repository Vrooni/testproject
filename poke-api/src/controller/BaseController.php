<?php

namespace App\controller;

abstract class BaseController
{
  protected function view($view_name, $data = [])
  {
    extract($data);
    require("src/view/$view_name.php");
  }
}
