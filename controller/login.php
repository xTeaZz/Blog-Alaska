<?php

  $user = "admin";
  $password = "jeanforteroche";

  if (isset($_POST['alias'], $_POST['pass']) AND $_POST['alias'] == $user AND $_POST['pass'] == $password) {
    header('Location: ../view/admin.php');
  } else {
    echo"Pseudo ou mot de passe incorrect";
  }

?>
