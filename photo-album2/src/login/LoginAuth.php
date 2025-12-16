<?php

namespace App\login;

class LoginAuth
{
  public function __construct(public $user_db, private $token_db) {}

  public function check_login($email, $password)
  {
    $user = $this->user_db->get_user_by_email($email);
    return $user && password_verify($password, $user->password);
  }

  public function set_identifier()
  {
    return bin2hex(time() . random_bytes(8));
  }

  public function set_token()
  {
    return bin2hex(time() . random_bytes(10));
  }

  public function check_token()
  {
    if (isset($_COOKIE["identifier"]) && isset($_COOKIE["securitytoken"])) {
      $token = $this->token_db->get_token($_COOKIE["identifier"]);

      if (password_verify($_COOKIE["securitytoken"], $token->securitytoken)) {
        $user = $this->user_db->get_user($token->userid);

        // changes session id
        session_regenerate_id(true);
        $securitytoken = $this->set_token();
        $this->token_db->update_token($user->userid, $securitytoken);

        $_SESSION["username"] = $user->username;
        $_SESSION["login"] = true;
        header("Location: /UserDashboard");
      } else {
        die("Please login again");
      }
    }

    return false;
  }

  public function build_token($userid)
  {
    $identifier = $this->set_identifier();
    $securitytoken = $this->set_token();
    $this->token_db->create_token($userid, $identifier, $securitytoken);
  }
}
