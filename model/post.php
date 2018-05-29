<?php
  class Post {
    private $id;
    private $title;
    private $message;
    private $date;

    public function __construct($id, $title, $message, $date) {
      $this->$id = $id;
      $this->$title = $title;
      $this->$message = $message;
      $this->$date = $date;
    }

    public function getPost() {
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
    }

    public function getLastPost() {
      $post = $db->query('SELECT * FROM post ORDER BY id DESC');
      while($p = $post->fetch()) {
    }
?>
