<?php
session_start();
require_once("init.php");

if (isset($_SERVER["PATH_INFO"])) {
  $request = $_SERVER["PATH_INFO"];
} else {
  $request = $_SERVER["REQUEST_URI"];
}

$router = $container->build("router");

try {
  if ($request == "/testproject/bootstrap/") {
    $router->add("home_controller", "home");
  } elseif ($request == "/Users") {
    $router->add("user_controller", "index");
  } elseif ($request == "/UserDashboard") {
    $router->add("dashboard_controller", "dashboard");
  } elseif ($request == "/User=user") {
    $router->add("user_controller", "profile");
  } elseif ($request == "/Register") {
    $router->add("register_controller", "register");
  } elseif ($request == "/Login") {
    $router->add("login_controller", "login");
  } elseif ($request == "/Logout") {
    $router->add("logout_controller", "logout");
  } else {
    $router->add("error_controller", "error");
  }
} catch (Throwable $e) {
  echo $e;
}
