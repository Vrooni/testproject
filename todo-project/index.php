<?php
require_once("autoloader.php");

use App\router\Router;
use App\controllers\HomeController;

$router = new Router();
$router->add("GET", "/testproject/todo-project/", "HomeController@index");
$router->add("POST", "/testproject/todo-project/", "HomeController@post");
$router->dispatch();
