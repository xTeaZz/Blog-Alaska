<?php

  class Controller{

    public function homeView() {
      require'../view/accueil.php';
    }

    public function setPost(){
        require'../model/db.php';

    }

  }

?>
