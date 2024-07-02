<?php

namespace App\Application\Router;

use App\Application\Router\RouteInterfase;

class Route implements RouteInterfase
{
  private static array $routes = [];
  public static function page(string $path, mixed $html): void
  {
    self::$routes[] = [
      'uri' => $path,
      'html' => $html
    ];
  }
  public static function list(): array
  {
    return self::$routes;
  }
}
