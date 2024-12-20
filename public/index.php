<?php 
// myapp/public/index.php 

error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

require '../vendor/autoload.php';
use app\core\App;

$app = new App();
$app->loadController();


  



