<?php
require_once("init.php");

if (isset($_SERVER["PATH_INFO"])) {
  $request = $_SERVER["PATH_INFO"];
} else {
  $request = $_SERVER["REQUEST_URI"];
}

$router = $container->build("router");

if ($request == "/testproject/routing/") {
  $router->add("home_controller", "home");
} elseif ($request == "/Users") {
  $router->add("user_controller", "index");
} elseif ($request == "/User=user") {
  $router->add("user_controller", "profile");
} else {
  $router->add("error_controller", "error");
}
