<?php
  class Database {

    private $db = new PDO('mysql:host=127.0.0.1;dbname=alaska', 'root', '');

    public function __construct($db) {
      $this->db = $db;
    }
  }
?>
