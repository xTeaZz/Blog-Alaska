<?php

  class Controller{

    public function homeView() {
      require'../view/accueil.php';
    }

    public function getPost() {
      require'../model/db.php';
      require'../model/Post.php';
      require'../view/article.php';
      getPost();
    }

    public function setPost() {
        require'../model/db.php';
    }

    public function createPost() {
      require'../model/db.php';
      require'../model/Post.php';
      require'../view/post.php';
      createPost();
    }

    public function listPost() {
      require'../model/db.php';
      require'../model/Post.php';
      require'../view/episodes.php';
      listPost();
    }

  }

?>
