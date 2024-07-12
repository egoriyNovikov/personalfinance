<?php

namespace App\Application\Router;

interface RouteInterface
{
  public static function page(string $uri, string $html);

  public static function list(): array;
}
