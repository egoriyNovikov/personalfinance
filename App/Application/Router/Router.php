<?php

namespace App\Application\Router;


use App\Application\Router\RouterInterface;

class Router implements RouterInterface
{
  public function handle(array $router): void
  {
    $uri = $_SERVER['REQUEST_URI'];
    foreach ($router as $route) {
      if ($uri === $route['uri']) {
        echo $route['html'];
      }
    }
  }
}
