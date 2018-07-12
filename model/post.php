<?php

  require_once'Database.php';

  class Post extends Database {

    public function getPost() {
      $database = new Database;
      $db = $database->getConnection();
      if(isset($_GET['id']) AND !empty($_GET['id'])){
        $get_id = htmlspecialchars($_GET['id']);
        $post = $db->prepare('SELECT * FROM post WHERE id = ?');
        $post->execute(array($get_id));
        $post = $post->fetch();
        $title = $post['title'];
        $message = $post['message'];
      } else {
        echo "Article Introuvable";
      }
      return $post;
    }

    public function createPost() {
      $database = new Database;
      $db = $database->getConnection();
      if (isset($_POST['title'], $_POST['postText'])) {
        if(!empty($_POST['title']) AND !empty($_POST['postText'])){
          $post_title = htmlspecialchars($_POST['title']);
          $post_message = ($_POST['postText']);

          $insert = $db->prepare('INSERT INTO post(title, message, creation_date) VALUES (?, ?,NOW())');
          $insert->execute(array($post_title, $post_message));

          $info = "Votre Article a bien était crée";
        } else {
          $info = "Veuillez remplir tous les champs";
        }
      }
      if (isset($info)) {
        echo $info;
      }
    }

    public function updatePost() {
      $database = new Database;
      $db = $database->getConnection();
      if (isset($_POST['title'], $_POST['postText'])) {
        if(!empty($_POST['title']) AND !empty($_POST['postText'])){
          if(isset($_GET['id']) AND !empty($_GET['id'])) {
            $update_post = htmlspecialchars($_GET['id']);
          $post_title = htmlspecialchars($_POST['title']);
          $post_message =($_POST['postText']);
          $update = $db->prepare('UPDATE post SET title = ?, message = ? WHERE id = ?');
          $update->execute(array($post_title, $post_message, $update_post));

          $info = "Votre Article a bien était modifier";
          }
        } else {
          $info = "Veuillez remplir tous les champs";
        }
      }
      if (isset($info)) {
        echo $info;
      }
    }

    public function listPost() {
      $database = new Database;
      $db = $database->getConnection();
      $post = $db->query('SELECT * FROM post ORDER BY id DESC');
      return $post;
    }

    public function getLastPosts() {
      $database = new Database;
      $db = $database->getConnection();
      $post = $db->query('SELECT * FROM post ORDER BY id DESC LIMIT 3');
      return $post;
    }

    public function deletePost() {
      $database = new Database;
      $db = $database->getConnection();
      if(isset($_GET['id']) AND !empty($_GET['id'])) {
        $delete_post = htmlspecialchars($_GET['id']);

        $delete = $db->prepare('DELETE FROM post WHERE id = ?');
        $delete->execute(array($delete_post));

        $delete_comment = $db->prepare('DELETE FROM comment WHERE id_post = ?');
        $delete_comment->execute(array($delete_post));

        $info = "Votre Article a bien était supprimer";
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
