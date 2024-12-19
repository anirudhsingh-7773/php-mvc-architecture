<?php 

namespace app\core;

class Model extends Database {

  public function createTable($tableName, $columns) {
    $sql = "CREATE TABLE IF NOT EXISTS $tableName ($columns)";
    try {
      $this->runQuery($sql);
      return true; // Table created successfully
    } catch (\Exception $e) {
      echo "Error creating table: " . $e->getMessage();
      return false; // Table creation failed
    }
  }

  public function showFullTable($tableName) {
    $sql = "SELECT * FROM $tableName";
    $this->runQuery($sql);
  }

  public function showByID($tableName, $id) {
    $sql = "SELECT * FROM $tableName WHERE id = $id";
    $this->runQuery($sql);
  }
}