<?php

namespace App\login;

use Throwable;

class LoginAuth
{
  public function __construct(private $user_db) {}

  public function check_login($email, $password)
  {
    $user = $this->user_db->get_user_by_email($email);
    return $user && password_verify($password, $user->password);
  }
}
