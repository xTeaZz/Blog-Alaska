<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <!--Head-->
  <head>
    <meta charset="utf-8">
    <title>Billet simple pour l'Alaska</title>
    <meta name="description" content="Billet simple pour l'Alaska Un roman de Jean Forteroche" />
    <!--Twitter Card data-->
    <meta name="twitter:card" content="summary">
    <!--Open Graph data-->
    <meta property="og:title" content="Billet simple pour l'Alaska" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.jonathan-cohen.com/roman/index.php" />
    <meta property="og:image" content="http://www.jonathan-cohen.com/roman/index.php" />
    <meta property="og:description" content="Billet simple pour l'Alaska Un roman de Jean Forteroche" />
    <link rel="stylesheet" href="public/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="public/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/fontawesome-.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <!--Body-->
  <body class="sectionbackground">
    <!--Header-->
    <header class="navbarfixed">
      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="">Billet simple pour l'Alaska</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#episodes">Episodes<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#bio">Jean Forteroche<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
        <!--Connection-->
        <div>
          <button class="btn btn-outline-success" type="button" data-toggle="modal" data-target="#login">Connection</button>
          <div id="login" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header center">
                  Veuillez entrer vos identifiants
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Adresse Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Mot de Passe</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de Passe">
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal" name="button">Annuler</button>
                  <button type="submit" class="btn btn-success" data-dismiss="modal" name="button">Valider</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <!--Hero-->
    <section class="herosection sectionmargin">
      <div class="hero">
        <div class="herocaption center">
          <h1 class="">Un billet simple pour l'Alaska</h1>
          <p>Un Roman écrit par Jean Forteroche</p>
        </div>
      </div>
    </section>
    <!--Episodes-->
    <section class="container-fluid sectionmargin" id="episodes">
      <div class="row" id="rowcard">
        <div class="card col-3" style="width: 18rem;">
          <img class="card-img-top" src=".../100px180/" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Lire la suite</a>
          </div>
        </div>
        <div class="card col-3" style="width: 18rem;">
          <img class="card-img-top" src=".../100px180/" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Lire la suite</a>
          </div>
        </div>
        <div class="card col-3" style="width: 18rem;">
          <img class="card-img-top" src=".../100px180/" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Lire la suite</a>
          </div>
        </div>
      </div>
    </section>
    <!--Biography-->
    <section class="sectionmargin container" id="bio">
      <div class="jumbotron">
        <h1 class="display-4">Hello, world!</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
      </div>
    </section>
    <!--Contact-->
    <section id="contact" class="container sectionmargin">
      <form>
        <div class="form-group">
          <label for="exampleFormControlInput1">Adresse Email</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Adresse Email">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Message</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Votre Message"></textarea>
        </div>
        <div class="form-group alignleft">
          <button type="submit" class="btn btn-primary" name="button">Envoyer</button>
        </div>
      </form>
    </section>
    <!--Footer-->
    <footer>
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/main.js"></script>
    </footer>
  </body>
</html>


<?php
require('controller/frontend.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listPosts') {
        listPosts();
    }
    elseif ($_GET['action'] == 'post') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            post();
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
    elseif ($_GET['action'] == 'addComment') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                addComment($_GET['id'], $_POST['author'], $_POST['comment']);
            }
            else {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
}
else {
    listPosts();
}
