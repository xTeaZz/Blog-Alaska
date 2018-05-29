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
  }
?>
