<?php

  require'controller/ControllerHome.php';
  require'controller/ControllerAdmin.php';

  if (isset($_GET['action'])) {
    if ($_GET['action'] == 'episodes') {
      $controller = new ControllerHome();
      $controller->listEpisodes();
    }
    elseif ($_GET['action'] == 'login') {
      $controller = new ControllerHome();
      $controller->createPost();
    }
    elseif ($_GET['action'] == 'sign') {
      $controller = new ControllerHome();
      $controller->createPost();
    }
    elseif ($_GET['action'] == 'createpost') {
      $controller = new ControllerAdmin();
      $controller->createPost();
    }
    elseif ($_GET['action'] == 'delete') {
      $controller = new ControllerAdmin();
      $controller->deleteList();
    }
    elseif ($_GET['action'] == 'deletepost') {
      $controller = new ControllerAdmin();
      $controller->deletePost();
    }
    elseif ($_GET['action'] == 'admin') {
      $controller = new ControllerAdmin();
      $controller->adminView();
    }
    elseif ($_GET['action'] == 'bio') {
      $controller = new ControllerHome();
      $controller->bioView();
    }
    elseif ($_GET['action'] == 'article') {
      if (isset($_GET['id']) && $_GET['id'] > 0) {
        $controller = new ControllerHome();
        $controller->getPost();
      }
      else {
        echo 'Erreur Aucune page trouvé';
      }
    }
  }
  else {
    $controller = new ControllerHome();
    $controller->homeView();
  }

?>
