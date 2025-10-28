<?php

namespace App\database;

use PDO;
use PDOException;

class Database
{
  private $host = "localhost";
  private $db_name = "todos";
  private $username = "root";
  private $password = "";
  private $connection;

  public function get_connection()
  {
    $this->connection = null;

    try {
      $this->connection = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->username, $this->password);
      $this->connection->exec("set names utf8");
    } catch (PDOException $ex) {
      echo "Database connection error: " . $ex->getMessage();
    }

    return $this->connection;
  }
}
