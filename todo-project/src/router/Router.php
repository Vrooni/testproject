<?php

namespace App\router;

class Router
{
  private $routes = [];

  public function add($method, $path, $contoller_action)
  {
    $this->routes[$method][$path] = $contoller_action;
  }

  public function dispatch()
  {
    $method = $_SERVER["REQUEST_METHOD"];
    $path = $_SERVER["REQUEST_URI"];

    foreach ($this->routes[$method] ?? [] as $route => $contoller_action) {
      if (preg_match($this->formatRoute($route), $path, $matches)) {
        array_shift($matches);
        list($class, $action) = explode("@", $contoller_action);

        $class = "App\controllers\\$class";
        if (class_exists($class) && method_exists($class, $action)) {
          return call_user_func_array([new $class(), $action], array_slice($matches, 1));
        }
      }
    }

    http_response_code(404);
    echo "404 Not Found";
  }

  private function formatRoute($route)
  {
    $route = preg_replace('/\{([^\/]+)\}/', '(?P<$1>[^/]+)', $route);
    return "#^$route$#";
  }
}
