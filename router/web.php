<?php

use App\Application\Router\Route;
use App\Application\Controller\HomeController;
use App\Application\Controller\AboutController;

// Route::page('/', '<h1>Home page</h1>');
// Route::page('/about', '<h1>About page</h1>');
Route::page('/', HomeController::class, "index");
Route::page('/about', AboutController::class, "index");
