<?php

  $user = "admin";
  $password = "jeanforteroche";

  if (isset($_POST['alias'], $_POST['pass']) AND $_POST['alias'] == $user AND $_POST['pass'] == $password) {
    header('Location: ../index.php?action=admin');
  } else {
    echo"Pseudo ou mot de passe incorrect";
  }

?>
