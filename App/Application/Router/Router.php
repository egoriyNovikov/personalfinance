<?php

namespace App\Application\Router;


use App\Application\Router\RouterInterface;

class Router implements RouterInterface
{
  public function handle(array $router): void
  {
    // dd($_SERVER['REQUEST_URI']);
    $uri = $_SERVER['REQUEST_URI'];
    foreach ($router as $route) {
      if ($uri === $route['uri']) {
        $method = $route['method'];
        (new $route['controller'])->$method();
      }
    }
  }
}
