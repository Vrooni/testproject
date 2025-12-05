<?php

namespace App\connections;

use PDO;

class MySQL
{
  public function connect_my_sql()
  {
    $pdo = new PDO("mysql:host=localhost;dbname=users;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $pdo;
  }

  public function connect_my_sql_2()
  {
    $pdo = new PDO("mysql:host=localhost;dbname=andereDB;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $pdo;
  }
}
