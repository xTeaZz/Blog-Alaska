<?php

  require_once'Database.php';

  class Commentary extends Database {

    public function listCommentary() {
      $database = new Database;
      $db = $database->getConnection();
      $post_id = htmlspecialchars($_GET['id']);
      $commentary = $db->prepare('SELECT * FROM comment WHERE id_post = ? ORDER BY id DESC');
      $commentary->execute(array($post_id));
      return $commentary;
    }

    public function listReportedCommentary() {
      $database = new Database;
      $db = $database->getConnection();
      $commentary = $db->prepare('SELECT * FROM comment WHERE report = 1 ORDER BY id_post');
      $commentary->execute();
      return $commentary;
    }

    public function createCommentary() {
      session_start();
      $database = new Database;
      $db = $database->getConnection();
      if (isset($_SESSION['alias'])) {
        if (isset($_POST['comment'])) {
          if(!empty($_POST['comment'])){
            $post_commentary = htmlspecialchars($_POST['comment']);
            $post_id = ($_GET['id']);
            $useralias= ($_SESSION['alias']);
            $insert = $db->prepare('INSERT INTO comment(alias_user, id_post, comment_text, comment_date) VALUES (?, ?, ?, NOW())');
            $result = $insert->execute(array($useralias, $post_id, $post_commentary));

            $info = "Votre commentaire a bien était crée";
          }
          else {
          $info = "Veuillez remplir tous les champs";
        }
      }
    }
    else {
      $info ="Vous devez être connecter pour réaliser cette action";
    }
      if (isset($info)) {
        echo $info;
      }
    }

    public function deleteCommentary() {
      $database = new Database;
      $db = $database->getConnection();
      if(isset($_GET['id']) AND !empty($_GET['id'])) {
        $delete_comment = htmlspecialchars($_GET['id']);

        $delete = $db->prepare('DELETE FROM comment WHERE id = ?');
        $delete->execute(array($delete_comment));

        $info = "Votre commentaire a bien était supprimer";
      }
      else {
        $info = "Une erreur est survenue";
      }
      if (isset($info)) {
        echo $info;
      }
    }

    public function validateCommentary() {
      $database = new Database;
      $db = $database->getConnection();
      if(isset($_GET['id']) AND !empty($_GET['id'])) {
        $report_id = htmlspecialchars($_GET['id']);

        $report = $db->prepare('UPDATE comment SET report = 0 WHERE id = ?');
        $report->execute(array($report_id));

        $info = "Votre commentaire a bien était valider";
      }
      else {
        $info = "Une erreur est survenue";
      }
      if (isset($info)) {
        echo $info;
      }
    }

    public function reportCommentary() {
      $database = new Database;
      $db = $database->getConnection();
      if(isset($_GET['id']) AND !empty($_GET['id'])) {
        $report_id = htmlspecialchars($_GET['id']);

        $report = $db->prepare('UPDATE comment SET report = 1 WHERE id = ?');
        $report->execute(array($report_id));

        $info = "Votre commentaire a bien était signaler";
      }
      else {
        $info = "Une erreur est survenue";
      }
      if (isset($info)) {
        echo $info;
      }
    }

  }
?>
