<?php

  require_once'Database.php';

  class Post extends Database {

    public function getPost() {
      require'db.php';
      if(isset($_GET['id']) AND !empty($_GET['id'])){
        $get_id = htmlspecialchars($_GET['id']);
        $post = $db->prepare('SELECT * FROM post WHERE id = ?');
        $post->execute(array($get_id));
        $post = $post->fetch();
        $title = $post['title'];
        $message = $post['message'];
      } else {
        header('Location: episodes.php');
      }
      return $post;
    }

    public function createPost() {
      if (isset($_POST['title'], $_POST['postText'])) {
        if(!empty($_POST['title']) AND !empty($_POST['postText'])){
          $post_title = htmlspecialchars($_POST['title']);
          $post_message = htmlspecialchars($_POST['postText']);

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
      return $post;
    }

    public function listPost() {
      $database = new Database;
      $database->getConnection();
      var_dump($db);
      $post = $db->query('SELECT * FROM post ORDER BY id DESC');
      return $post;
    }

    public function getLastPost() {
      $post = $db->query('SELECT * FROM post ORDER BY id DESC LIMIT 3');
      while($p = $post->fetch()) {
      }
    }

    public function deletePost() {
      if(isset($_GET['id']) AND !empty($_GET['id'])) {
        $delete_post = htmlspecialchars($_GET['id']);

        $delete = $db->prepare('DELETE FROM post WHERE id = ?');
        $delete->execute(array($delete_post));

        header('Location: deletescreen.php');
      }
    }
  }
?>
