<?php

namespace App\Application\Controller;

class HomeController extends Controller
{
  public function index()
  {
    $this->view('home');
    extract([
      'title' => 'Home',
      'content' => 'Hello World',
    ]);
  }
}
