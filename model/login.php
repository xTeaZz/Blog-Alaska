<?php
  require 'db.php';
  require '../index.php';

  session_start();

  if(isset($_POST['buttonLogin'])) {
   $alias = htmlspecialchars($_POST['alias']);
   $pass = password_hash($_POST['pass']);
   if(!empty($alias) AND !empty($pass)) {
      $requser = $bdd->prepare("SELECT * FROM member WHERE mail = ? AND password = ?");
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
?>
