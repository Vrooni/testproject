<?php

namespace App\app\abstract_mvc;


abstract class AbstractController
{
  public function page_load($dir, $view_name, $vars)
  {
    extract($vars);
    require_once(__DIR__ . "/../../$dir/mvc/views/$view_name.php");
  }
}
