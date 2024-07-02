<?php

namespace App\Application\Router;


interface RouterInterface
{
  public function handle(array $router): void;
}
