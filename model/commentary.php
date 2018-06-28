<?php

  require_once'Database.php';

  class Commentary extends Post {

    public function listCommentary() {
      $database = new Database;
      $db = $database->getConnection();
      $commentary = $db->query('SELECT * FROM comment ORDER BY id DESC');
      return $commentary;
    }

    public function createCommentary() {
      $database = new Database;
      $db = $database->getConnection();
      if (isset($_POST['comment'])) {
        if(!empty($_POST['comment'])){
          $post_commentary = htmlspecialchars($_POST['comment']);

          $insert = $db->prepare('INSERT INTO comment(comment_text, comment_date) VALUES (?,NOW())');
          $insert->execute(array($post_commentary));

          $info = "Votre commentaire a bien était crée";
        } else {
          $info = "Veuillez remplir tous les champs";
        }
      }
      if (isset($info)) {
        echo $info;
      }
    }

  }
?>
