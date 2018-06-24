<?php
session_start();

require'db.php';

if(isset($_GET['id']) AND $_GET['id'] > 0) {
  $database = new Database;
  $db = $database->getConnection();
   $getid = intval($_GET['id']);
   $requser = $db->prepare('SELECT * FROM member WHERE id = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
?>
