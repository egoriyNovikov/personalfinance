<?php

namespace App\Application\View;


class View
{
  public static function rand(): array
  {
    $view = require __DIR__ . '/../../../config/view.php';
    return $view;
  }
}
