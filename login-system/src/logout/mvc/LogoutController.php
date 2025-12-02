<?php

namespace App\logout\mvc;

use App\app\abstract_mvc\AbstractController;

class LogoutController extends AbstractController
{
  public function logout()
  {
    unset($_SESSION["login"]);
    $this->page_load("logout", "LogoutView", []);
  }
}
