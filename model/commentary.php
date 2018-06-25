<?php

  require_once'Database.php';

  class Commentary extends Post {

    public function listCommentary() {
      $database = new Database;
      $db = $database->getConnection();
      $commentary = $db->query('SELECT * FROM comment ORDER BY id DESC');
      return $commentary;
    }

  }
?>
