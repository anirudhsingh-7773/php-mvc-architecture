<?php 

namespace app\controllers;
use app\core\Controller;

class _404 extends Controller {

  public function index() {
    $this->view('');
  }
}