<?php

namespace App\login\mvc;

use App\app\abstract_mvc\AbstractController;

class LoginController extends AbstractController
{
  public function __construct(private $login_auth) {}

  public function login()
  {
    $fail = null;
    if (!empty($_POST)) {
      $email = $_POST["email"];
      $password = $_POST["password"];
      $login = $this->login_auth->check_login($email, $password);

      if ($login) {
        $user = $this->login_auth->user_db->get_user_by_email($email);

        // changes session id
        session_regenerate_id(true);
        $_SESSION["username"] = $user->username;
        $_SESSION["login"] = true;
        header("Location: /UserDashboard");
      } else {
        $fail = "Login failed";
      }
    }

    if ($_SESSION["login"]) {
      header("Location: /UserDashboard");
    } else {
      $this->page_load("login", "LoginView", ["fail" => $fail]);
    }
  }
}
