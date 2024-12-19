<?php 

session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../vendor/autoload.php';
use app\core\App;


// require '../app/core/init.php';


$app = new App();
$app->loadController();


  



