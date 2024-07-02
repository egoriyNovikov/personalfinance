<?php

namespace App\Application\Router;

interface RouteInterfase
{
  public  static function page(string $path, mixed $html): void;

  public static function list(): array;
}
