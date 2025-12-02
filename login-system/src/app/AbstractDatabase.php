<?php

namespace App\app;

use PDO;

abstract class AbstractDatabase
{
  function __construct(protected PDO $pdo) {}

  abstract function get_table();
  abstract function get_model();

  function get_user($userid)
  {
    $table = $this->get_table();
    $model = $this->get_model();

    $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE userid = '$userid'");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_CLASS, $model); // writes into class attricutes

    return $stmt->fetch(PDO::FETCH_CLASS);
  }

  function get_user_by_email($email)
  {
    $table = $this->get_table();
    $model = $this->get_model();

    $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE mail = '$email'");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_CLASS, $model);

    return $stmt->fetch(PDO::FETCH_CLASS);
  }
}
