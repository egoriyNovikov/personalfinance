<?php

namespace App\Application\Router;

interface RouteInterfase
{
  public  static function page(string $path, mixed $controller, ?string $method): void;

  public static function list(): array;
}
