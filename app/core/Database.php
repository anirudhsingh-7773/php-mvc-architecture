<?php 
// myapp/app/core/Database.php

namespace app\core;

class Database {

  protected function connect() {
    $conn = new \mysqli('localhost', 'assignmentuser', 'Hello@123', 'mvc_db');

    // Checks for error in connecting to database.
    if ($conn->connect_error) {
      die('Connection failed: ' . $conn->connect_error);
    }
    return $conn;
  }

  public function runQuery($sql) {

    $conn = $this->connect();
    $conn->query($sql);
    $conn->close();
  }
}