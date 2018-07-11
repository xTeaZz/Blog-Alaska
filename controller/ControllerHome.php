<?php

  class ControllerHome {

    public function homeView() {
      require'/model/User.php';
      require'/model/Post.php';
      $lastposts = new Post();
      $post = $lastposts->getLastPosts();
      require'/view/accueil.php';
      require'/controller/login.php';
    }

    public function signuser() {
      require'/model/User.php';
      require'/model/Post.php';
      $userclass = new User();
      $user = $userclass->sign();
    }

    public function bioView() {
      require'/model/User.php';
      require'/view/bio.php';
      require'/controller/login.php';
    }

    public function getPost() {
      require'/model/User.php';
      require'/model/Post.php';
      require'/model/Commentary.php';
      $getpost = new Post();
      $post = $getpost->getPost();
      $getcomment = new Commentary();
      $commentary = $getcomment->listCommentary();
      require'/view/article.php';
    }

    public function getLastPosts() {
      require'/model/User.php';
      require'model/Post.php';
      $lastposts = new Post();
      $post = $lastposts->listPost();
      require'view/episodes.php';
    }

    public function listEpisodes() {
      require'/model/User.php';
      require'model/Post.php';
      $listpost = new Post();
      $post = $listpost->listPost();
      require'view/episodes.php';
    }

    public function sign() {
      require'/model/User.php';
      require'model/Post.php';
      $listpost = new Post();
      $post = $listpost->listPost();
      require'view/episodes.php';
    }

    public function login() {
      require'/model/User.php';
      require'model/Post.php';
      $listpost = new Post();
      $post = $listpost->listPost();
      require'view/episodes.php';
    }

    public function createcomment() {
      require'model/Post.php';
      require'model/Commentary.php';
      $commentary = new Commentary();
      $comment = $commentary->createCommentary();
    }

    public function reportCommentary() {
      require'model/Post.php';
      require'model/Commentary.php';
      $report = new Commentary();
      $comment = $report->reportCommentary();
    }

  }

?>
