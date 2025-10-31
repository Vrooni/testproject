<?php

require_once("autoload.php");

use App\router\Router;

$router = new Router;
$router->add("GET", "/testproject/poke-api/", "HomeController@index");
$router->add("POST", "/testproject/poke-api/", "HomeController@post_index");
$router->dispatch();
