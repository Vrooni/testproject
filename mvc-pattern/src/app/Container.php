<?php

namespace App\app;

use App\user\UserDatabase;
use App\connections\MySQL;
use App\user\mvc\UserController;

class Container
{
  private $class_instances = [];
  private $builds = [];

  public function __construct()
  {
    $this->builds = [
      "user_data_base" => function () {
        return new UserDatabase($this->build('pdo'));
      },

      "user_controller" => function () {
        return new UserController($this->build('user_data_base'));
      },

      "pdo" => function () {
        $connection = new MySQL();
        return $connection->connect_my_sql();
      }
    ];
  }

  public function build($object)
  {
    if (isset($this->builds[$object])) {
      if (empty($this->class_instances[$object])) {
        $this->class_instances[$object] = $this->builds[$object]();
      }
    }

    return $this->class_instances[$object];
  }
}
