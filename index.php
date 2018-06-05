<?php

  require'controller/Controller.php';

  if (isset($_GET['action'])) {
    if ($_GET['action'] == 'episodes') {
      listPost();
    }
    elseif ($_GET['action'] == 'post') {
      createPost();
    }
    elseif ($_GET['action'] == 'article') {
      if (isset($_GET['id']) && $_GET['id'] > 0) {
        getPost();
      }
      else {
        echo 'Erreur Aucune page trouvé';
      }
    }
  }
  else {
    /*homeView();*/
    require'model/db.php';
    require'view/accueil.php';
  }

?>
