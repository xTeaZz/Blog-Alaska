<?php

class ControllerAdmin {

  public function adminView() {
    require'/model/db.php';
    require'/model/User.php';
    require'/view/admin.php';
    require'/controller/login.php';
  }

  public function setPost() {
    require'/model/User.php';
    require'/model/db.php';
  }

  public function createPost() {
    require'/model/db.php';
    require'/model/User.php';
    require'/model/Post.php';
    require'/view/post.php';
    $create = new Post();
    $post = $create->createPost();
  }

  public function deleteList() {
    require'model/db.php';
    require'/model/User.php';
    require'model/Post.php';
    $deletelist = new Post();
    $post = $deletelist->listPost();
    require'/view/deletescreen.php';
  }

  public function deletePost() {
    require'model/db.php';
    require'/model/User.php';
    require'model/Post.php';
    $deletepost = new Post();
    $post = $deletepost->deletePost();
    require'/view/deletescreen.php';
  }

}

?>
