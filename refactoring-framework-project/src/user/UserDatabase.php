<?php

namespace App\user;

use PDO;

class UserDatabase
{
  function __construct(private PDO $pdo) {}

  function get_user($userid)
  {
    return $this->pdo->query("SELECT * FROM users WHERE userid = '$userid'");
  }

  function get_users()
  {
    return $this->pdo->query("SELECT * FROM users");
  }

  function create_user()
  {
    return $this->pdo->query("INSERT INTO users (username, mail, password) 
    VALUES ('Herbert', 'herbert@test.de', 'e456')");
  }

  function delete_user()
  {
    return $this->pdo->query("DELETE FROM users WHERE username = 'Herbert'");
  }

  function update_user()
  {
    return $this->pdo->query("UPDATE users SET password = 'new 234t' WHERE userid = 1");
  }
}
