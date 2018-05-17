<?php

  var_dump($_POST);

  $error = [];

  if(!isset($_POST['mail']) | $_POST['mail'] == '') {
    $error['name'] = "Vous n'avez pas renseigné d'email"
  }
  if(!isset($_POST['message']) | $_POST['message'] == '') {
    $error['message'] = "Vous n'avez pas renseigné de message"
  }

  if (!empty($error)) {
    header('Location: ../index.php');
  }

  $message = $_POST['message'];
  $headers ='FROM xteazz06@gmail.com'

  mail('xteazz06@gmail.com', Formulaire de contact, $message, $headers);

 ?>
