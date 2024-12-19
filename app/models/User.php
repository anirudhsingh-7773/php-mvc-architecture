<?php 
// myapp/app/models/User.php

namespace app\models;
use app\core\Model;

class User extends Model {

  protected $table = "users";

  public function createUserTable() {
    $columns = "
      id INT(15) AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(255) NOT NULL
    ";

    return $this->createTable($this->table, $columns);
  }
}