<?php 
// myapp/app/controllers/Home.php

namespace app\controllers;
use app\core\Controller;

class Home extends Controller {

  public function index() {
    $this->view('home');
  }
}