<?php

namespace App\app;

use App\app\Container;

class Router
{
  public function __construct(private Container $container) {}

  public function add($controller, $view)
  {
    $controller = $this->container->build($controller);
    $this->build($controller, $view);
  }

  public function build($controller, $view)
  {
    $controller->$view();
  }
}
