<?php

namespace App\app;

use App\album\AlbumDatabase;
use App\album\mvc\AlbumController;
use App\user\UserDatabase;
use App\connections\MySQL;
use App\dashboard\mvc\DashboardController;
use App\home\mvc\HomeController;
use App\error\mvc\ErrorController;
use App\home\HomeDatabase;
use App\login\LoginAuth;
use App\login\mvc\LoginController;
use App\logout\mvc\LogoutController;
use App\register\mvc\RegisterController;
use App\token\TokenDatabase;
use App\user\mvc\UserController;

class Container
{
  private $class_instances = [];
  private $builds = [];

  public function __construct()
  {
    $this->builds = [
      "router" => function () {
        return new Router($this->build('container'));
      },

      "container" => function () {
        return new Container();
      },

      "user_data_base" => function () {
        return new UserDatabase($this->build('pdo'));
      },

      "token_data_base" => function () {
        return new TokenDatabase($this->build('pdo'));
      },

      "home_data_base" => function () {
        return new HomeDatabase($this->build('pdo'));
      },

      "album_data_base" => function () {
        return new AlbumDatabase($this->build('pdo'));
      },

      "user_controller" => function () {
        return new UserController($this->build('user_data_base'));
      },

      "register_controller" => function () {
        return new RegisterController($this->build('user_data_base'));
      },

      "login_controller" => function () {
        return new LoginController($this->build('login_auth'));
      },

      "logout_controller" => function () {
        return new LogoutController($this->build('token_data_base'));
      },

      "dashboard_controller" => function () {
        return new DashboardController();
      },

      "home_controller" => function () {
        return new HomeController($this->build('home_data_base'));
      },

      "album_controller" => function () {
        return new AlbumController($this->build('album_data_base'));
      },

      "error_controller" => function () {
        return new ErrorController();
      },

      "login_auth" => function () {
        return new LoginAuth($this->build('user_data_base'), $this->build('token_data_base'));
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
