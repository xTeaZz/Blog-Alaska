<?php

class ControllerAdmin {

  public function adminView() {
    require'/model/User.php';
    require'/view/admin.php';
    require'/controller/login.php';
  }

  public function updatePost() {
    require'/model/User.php';
    require'/model/Post.php';
    $getpost = new Post();
    $post = $getpost->getPost();
    require'/view/updatepost.php';
    $update = new Post();
    $post = $update->updatePost();
  }

  public function updateList() {
    require'/model/User.php';
    require'model/Post.php';
    $updatelist = new Post();
    $post = $updatelist->listPost();
    require'/view/updatescreen.php';
  }

  public function createPost() {
    require'/model/User.php';
    require'/model/Post.php';
    require'/view/createpost.php';
    $create = new Post();
    $post = $create->createPost();
  }

  public function deleteList() {
    require'/model/User.php';
    require'model/Post.php';
    $deletelist = new Post();
    $post = $deletelist->listPost();
    require'/view/deletescreen.php';
  }

  public function deletePost() {
    require'/model/User.php';
    require'model/Post.php';
    $deletepost = new Post();
    $post = $deletepost->deletePost();
  }

}

?>
