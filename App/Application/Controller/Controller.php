<?php

namespace App\Application\Controller;

use App\Application\View\View;

abstract class Controller
{
  public function view($name)
  {
    $confView = View::rand();
    // dd($confView);
    $pathToFile = $confView['view_path'] . $name . $confView['view_extension'];
    return require $pathToFile;
  }
}
