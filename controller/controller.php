<?php

  function post() {
    require('db.php');
    $post = getPost($_GET['id']);
    $comments = getComments($_GET['id']);

    require('postView.php');
  }

?>
