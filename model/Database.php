<?php

  class Database {

    public function getConnection() {
      $db = new PDO('mysql:host=127.0.0.1;dbname=alaska', 'root', '');
      return $db;
    }

  }

?>
