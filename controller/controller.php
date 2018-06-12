<?php

  class Controller{

    public function homeView() {
      require'/model/db.php';
      require'/view/accueil.php';
      require'/model/sign.php';
      require'/controller/login.php';
    }

    public function bioView() {
      require'/model/db.php';
      require'/view/bio.php';
      require'/model/sign.php';
      require'/controller/login.php';
    }

    public function adminView() {
      require'/model/db.php';
      require'/view/admin.php';
      require'/model/sign.php';
      require'/controller/login.php';
    }

    public function getPost() {
      require'/model/db.php';
      require'/model/Post.php';
      require'/view/article.php';
      $getpost = new Post();
      $post = $getpost->getPost();
    }

    public function setPost() {
        require'/model/db.php';
    }

    public function createPost() {
      require'/model/db.php';
      require'/model/Post.php';
      require'/view/post.php';
      $create = new Post();
      $post = $create->createPost();
    }

    public function listEpisodes() {
      require'model/db.php';
      require'model/Post.php';
      $listpost = new Post();
      $post = $listpost->listPost();
      require'view/episodes.php';
    }

  }

?>
