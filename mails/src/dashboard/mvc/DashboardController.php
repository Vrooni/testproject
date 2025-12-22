<?php

namespace App\dashboard\mvc;

use App\app\abstract_mvc\AbstractController;

class DashboardController extends AbstractController
{
  public function dashboard()
  {
    if ($_SESSION["login"]) {
      $this->page_load("dashboard", "DashboardView", []);
    } else {
      header("Location: /Login");
    }
  }
}
