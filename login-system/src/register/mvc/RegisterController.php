<?php

namespace App\register\mvc;

use App\app\abstract_mvc\AbstractController;

class RegisterController extends AbstractController
{
  public function __construct(private $user_db) {}

  public function register()
  {
    $fail = null;
    if (!empty($_POST)) {
      $firstname = $_POST["firstname"];
      $lastname = $_POST["lastname"];
      $username = $_POST["username"];
      $email = $_POST["email"];
      $password = $_POST["password"];


      if (empty($firstname && $lastname && $username && $email && $password)) {
        $fail = "Fill in all fields";
      } else {
        $user = $this->user_db->get_user_by_email($email);

        if (empty($user)) {
          // bad, because you can create password for md5 hashed password
          // md5("password");
          // one way hashing
          $password = password_hash($password, PASSWORD_DEFAULT);
          $this->user_db->create_user($firstname, $lastname, $username, $email, $password);
        } else {
          $fail = "User already exists for email: $email";
        }
      }
    }

    $this->page_load("register", "RegisterView", ["fail" => $fail]);
  }
}
