<?php

  require_once'Database.php';

  class Commentary extends Post {

    public function listCommentary() {
      $database = new Database;
      $database->getConnection();
      var_dump($db);
      $commentary = $db->query('SELECT * FROM post ORDER BY id DESC');
      return $commentary;
    }

  }
?>
