<?php

namespace App\logout\mvc;

use App\app\abstract_mvc\AbstractController;

class LogoutController extends AbstractController
{
  public function __construct(private $token_db) {}

  public function logout()
  {
    $this->token_db->delete_token($_COOKIE["identifier"]);
    unset($_SESSION["login"]);
    session_destroy();
    $this->page_load("logout", "LogoutView", []);
  }
}
