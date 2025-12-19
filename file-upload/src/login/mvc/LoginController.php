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

      if ($this->login_auth->check_login($email, $password)) {
        $user = $this->login_auth->user_db->get_user_by_email($email);

        if (!empty($_POST["stay-in"])) {
          $this->login_auth->build_token($user->userid);
        }

        // changes session id
        session_regenerate_id(true);
        $_SESSION["userid"] = $user->userid;
        $_SESSION["username"] = $user->username;
        $_SESSION["login"] = true;
        header("Location: /UserDashboard");
      } else {
        $fail = "Login failed";
      }
    }

    if ($this->login_auth->check_token()) {
    } elseif ($_SESSION["login"]) {
      header("Location: /UserDashboard");
    } else {
      $this->page_load("login", "LoginView", ["fail" => $fail]);
    }
  }
}
