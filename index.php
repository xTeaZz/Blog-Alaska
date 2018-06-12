<?php

  require'controller/controller.php';

  if (isset($_GET['action'])) {
    if ($_GET['action'] == 'episodes') {
      $controller = new Controller();
      $controller->listEpisodes();
    }
    elseif ($_GET['action'] == 'post') {
      $controller = new Controller();
      $controller->listEpisodes();
    }
    elseif ($_GET['action'] == 'admin') {
      $controller = new Controller();
      $controller->adminView();
    }
    elseif ($_GET['action'] == 'bio') {
      $controller = new Controller();
      $controller->bioView();
    }
    elseif ($_GET['action'] == 'article') {
      if (isset($_GET['id']) && $_GET['id'] > 0) {
        $controller = new Controller();
        $controller->getPost();
      }
      else {
        echo 'Erreur Aucune page trouvé';
      }
    }
  }
  else {
    $controller = new Controller();
    $controller->homeView();
  }

?>
