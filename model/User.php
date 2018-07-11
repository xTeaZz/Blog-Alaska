<?php

  require_once'Database.php';

  class User extends Database {

    public function disconnect() {
      session_start();
      $_SESSION = array();
      session_destroy();

      return $disconnection;
    }

    public function login() {
      session_start();
      $database = new Database;
      $db = $database->getConnection();

      if(isset($_POST['buttonLogin'])) {
        $alias = htmlspecialchars($_POST['alias']);
        $pass = password_hash($_POST['pass']);
        if(!empty($alias) AND !empty($pass)) {
          $requser = $db->prepare("SELECT * FROM member WHERE mail = ? AND password = ?");
          $requser->execute(array($alias, $pass));
          $userexist = $requser->rowCount();
          if($userexist == 1) {
             $userinfo = $requser->fetch();
             $_SESSION['id'] = $userinfo['id'];
             $_SESSION['alias'] = $userinfo['alias'];
             $_SESSION['email'] = $userinfo['email'];
             header("Location: user.php?id=".$_SESSION['id']);
          }
          else {
            $error = "Mauvais mail ou mot de passe !";
          }
        }
        else {
          $error = "Tous les champs doivent être complétés !";
        }
      }
    }

    public function sign() {
      $database = new Database;
      $db = $database->getConnection();
      if(isset($_POST['buttonSign'])) {
        if(!empty($_POST['alias']) AND !empty($_POST['mail']) AND !empty($_POST['pass'])) {
          $alias = htmlspecialchars($_POST['alias']);
          $mail = htmlspecialchars($_POST['mail']);
          $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
          $aliaslength = strlen($alias);
          if($aliaslength <= 255){
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
              $reqmail = $db->prepare("SELECT * FROM user WHERE email = ?");
              $reqmail->execute(array($mail));
              $verifmail = $reqmail->rowCount();
              if($verifmail == 0){
                $insertmember = $db->prepare("INSERT INTO user(alias, email, password) VALUES(?, ?, ?)");
                $insertmember->execute(array($alias, $mail, $pass));
                $error = "Votre compte a bien était crée";
              }
              else {
                $error = "Veuillez saisir un mail correct";
              }
            }
            else {
              $error = "Adresse Email déjà utilisée";
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
      if(isset($error)) {
        echo $error;
      }
      else {
        echo "Une erreur est surevenue";
      }
    }

  }

?>
