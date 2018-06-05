<?php
  require 'db.php';

  if(isset($_POST['buttonSign'])){
    if(!empty($_POST['alias']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['pass']) AND !empty($_POST['pass2'])){
      $alias = htmlspecialchars($_POST['alias']);
      $mail = htmlspecialchars($_POST['mail']);
      $mail2 = htmlspecialchars($_POST['mail2']);
      $pass = password_hash($_POST['pass']);
      $pass2 = password_hash($_POST['pass2']);
      $aliaslength = strlen($alias);

      if($aliaslength <= 255){
        if($mail == $mail2){
          if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
            $reqmail = $db->prepare("SELECT * FROM member WHERE email = ?");
            $reqmail->execute(array($mail));
            $verifmail = $reqmail->rowCount();
            if($verifmail == 0){
              if($pass == $pass2){
                $insertmember = $db->prepare("INSERT INTO member(alias, email, password) VALUES(?, ?, ?)");
                $insertmember->execute(array($alias, $mail, $pass));
                $error = "Votre compte a bien était crée";
                header('Location:../index.php');
              }
              else {
                $error = "Les mots de passe doivent êtres identiques";
              }
            }
            else{
              $error = "Adresse Email déjà utilisée";
            }
          }
          else {
            $error = "Veuillez entrez une adresse email correct";
          }
        }
        else {
          $error = "Les adresses email doivent êtres identiques";
        }
      }
      else {
        $error = "Votre pseudo ne doit pas dépasser 255 caractères";
      }
    }
    else {
      $error= "Tout les champs doivent être complétés";
    }
  }

  if(isset($error)){
    echo $error;
  }
?>
