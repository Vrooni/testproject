<?php

namespace App\home\mvc;

use App\app\abstract_mvc\AbstractController;

class HomeController extends AbstractController
{
  public function __construct(private $home_db) {}

  public function home()
  {
    $this->page_load("home", "HomeView", []);
  }
}
