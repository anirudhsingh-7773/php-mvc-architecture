<?php 
// myapp/app/core/App.php

namespace app\core;

class App {

  private $controller = 'Home';
  private $method     = 'index';
  
  private function splitURL() {
    
    $URL = $_GET['url'] ?? 'home';
    $URL = ltrim($URL,"/");
    $URL = explode("/", $URL);
    return $URL;
  }
  
  public function loadController() {
    $URL = $this->splitURL();
    
    $filename = "../app/controllers/" . ucfirst($URL[0]) . ".php";
    if (file_exists($filename)) {
      require $filename;
      $this->controller = "\\app\\controllers\\". ucfirst($URL[0]);
    }
    else {
      require '../app/controllers/_404.php';
      $this->controller = "\\app\\controllers\\_404";
    }

    $controller = new $this->controller;
    call_user_func_array([ $controller, $this->method], []);
    
  }
}
