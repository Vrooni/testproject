<?php

namespace App\user;

use App\app\AbstractDatabase;
use App\user\mvc\UserModel;
use PDO;

class UserDatabase extends AbstractDatabase
{

  public function get_table()
  {
    return "users";
  }

  public function get_model()
  {
    return UserModel::class;
  }

  function get_users()
  {
    $table = $this->get_table();
    $model = $this->get_model();

    $stmt = $this->pdo->prepare("SELECT * FROM $table");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_CLASS, $model);

    return $stmt->fetchAll(PDO::FETCH_CLASS);
  }

  function create_user()
  {
    $table = $this->get_table();
    $this->pdo->query("INSERT INTO $table (username, mail, password) 
    VALUES ('Herbert', 'herbert@test.de', 'e456')");
  }

  function delete_user()
  {
    $table = $this->get_table();
    $this->pdo->query("DELETE FROM $table WHERE username = 'Herbert'");
  }

  function update_user()
  {
    $table = $this->get_table();
    $this->pdo->query("UPDATE $table SET password = 'new 234t' WHERE userid = 1");
  }
}
