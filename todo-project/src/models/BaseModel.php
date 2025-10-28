<?php

namespace App\models;

use App\database\Database;

abstract class BaseModel
{
  protected $connection;

  public function __construct()
  {
    $datebase = new Database();
    $this->connection = $datebase->get_connection();
  }
}
