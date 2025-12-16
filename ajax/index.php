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
  if ($request == "/testproject/ajax/") {
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
  } elseif ($request == "/Album") {
    $router->add("album_controller", "album");
  } elseif ($request == "/Album-newAlbum") {
    $router->add("album_controller", "ajaxNewAlbum");
    $router->add("album_controller", "ajaxPage");
  } elseif ($request == "/Photo=settings") {
    $router->add("album_controller", "photo");
  } else {
    $router->add("error_controller", "error");
  }
} catch (Throwable $e) {
  echo $e;
}
