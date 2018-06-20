<?php

  class ControllerHome {

    public function homeView() {
      require'/model/db.php';
      require'/model/User.php';
      require'/view/accueil.php';
      require'/controller/login.php';
    }

    public function bioView() {
      require'/model/db.php';
      require'/model/User.php';
      require'/view/bio.php';
      require'/controller/login.php';
    }

    public function getPost() {
      require'/model/db.php';
      require'/model/User.php';
      require'/model/Post.php';
      $getpost = new Post();
      $post = $getpost->getPost();
      require'/view/article.php';
    }

    public function listEpisodes() {
      require'model/db.php';
      require'/model/User.php';
      require'model/Post.php';
      $listpost = new Post();
      $post = $listpost->listPost();
      require'view/episodes.php';
    }

    public function sign() {
      require'model/db.php';
      require'/model/User.php';
      require'model/Post.php';
      $listpost = new Post();
      $post = $listpost->listPost();
      require'view/episodes.php';
    }

    public function login() {
      require'model/db.php';
      require'/model/User.php';
      require'model/Post.php';
      $listpost = new Post();
      $post = $listpost->listPost();
      require'view/episodes.php';
    }

  }

?>