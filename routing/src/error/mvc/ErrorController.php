<?php

namespace App\error\mvc;

use App\app\abstract_mvc\AbstractController;

class ErrorController extends AbstractController
{
  public function error()
  {
    $this->page_load("error", "ErrorView", []);
  }
}
