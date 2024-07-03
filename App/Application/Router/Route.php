<?php

namespace App\Application\Router;

use App\Application\Router\RouteInterfase;

class Route implements RouteInterfase
{
  private static array $routes = [];
  public static function page(string $path, mixed $controller, ?string $method): void
  {
    self::$routes[] = [
      'uri' => $path,
      'controller' => $controller,
      'method' => $method
    ];
  }
  public static function list(): array
  {
    return self::$routes;
  }
}
