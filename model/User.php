<?php

  require_once'Database.php';

  class User extends Database {

    public function disconnect() {
      session_start();
      $_SESSION = array();
      session_destroy();

      return $disconnection;
    }

    public function loginUser() {
      $database = new Database;
      $db = $database->getConnection();

      if(isset($_POST['buttonLogin'])) {
        $mail = htmlspecialchars($_POST['mail']);
        $pass = ($_POST['pass']);
        if(!empty($mail) AND !empty($pass)) {
          $requser = $db->prepare("SELECT * FROM user WHERE email = ?");
          $result = $requser->execute(array($mail));
             $userinfo = $requser->fetch();
             $isPasswordCorrect = password_verify($pass, $userinfo['password']);
             if ($isPasswordCorrect) {
             session_start();
             $_SESSION['id'] = $userinfo['id'];
             $_SESSION['alias'] = $userinfo['alias'];
             $_SESSION['email'] = $userinfo['email'];
             header("Location: index.php?action=loged&id=".$_SESSION['id']);
           }
           else {
             echo "Mail ou Mot de passe incorrect";
           }
          }
          else {
            echo "Tous les champs doivent être complétés";
          }
        }
        else {
          echo "Un problème est surevenu";
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
