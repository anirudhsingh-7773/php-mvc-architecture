<?php 
// myapp/public/index.php 

session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../vendor/autoload.php';
use app\core\App;

$app = new App();
$app->loadController();


  



