<?php

namespace App\user\mvc;

use App\app\abstract_mvc\AbstractController;

class UserController extends AbstractController
{
  public function __construct(private $user_db) {}

  public function profile()
  {
    $userid = $_GET["userid"];
    $user = $this->user_db->get_user($userid);
    $this->page_load("user", "UserView", ["user" => $user]);
  }

  public function index()
  {
    $users = $this->user_db->get_users();
    $this->page_load("user", "UsersView", ["users" => $users]);
  }
}
