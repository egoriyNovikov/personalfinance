<?php

namespace App\Application;



use App\Application\Router\Route;
use App\Application\Router\Router;

class App
{
  public function run(): void
  {
    require __DIR__ . '/../../router/web.php';
    $router = new Router();
    $router->handle(Route::list());
  }
}
