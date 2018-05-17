<?php
  require 'db.php';
?>

<?php
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
?>
