<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <!--Head-->
  <?php
    $title = "Billet simple pour l'Alaska";
    require'head.php';
    ?>
  <!--Body-->
  <body class="sectionbackground">
    <!--Header-->
    <header class="navbarfixed">
      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Billet simple pour l'Alaska</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="?action=episodes">Episodes<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?action=bio">Jean Forteroche<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
        <!--Inscription-->
        <div>
          <button class="btn btn-outline-warning" type="button" data-toggle="modal" data-target="#sign">Inscription</button>
          <div id="sign" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header center">
                  Veuillez entrer vos identifiants d'Inscription
                </div>
                <div class="modal-body">
                  <form method="post" action="model/sign.php">
                    <div class="form-group">
                      <label for="alias">Pseudo</label>
                      <input type="text" class="form-control" name="alias" placeholder="Pseudo">
                    </div>
                    <div class="form-group">
                      <label for="emailForm">Adresse Email</label>
                      <input type="email" class="form-control" name="mail" aria-describedby="emailHelp" placeholder="Adresse Email">
                    </div>
                    <div class="form-group">
                      <label for="emailForm">Confirmation Adresse Email</label>
                      <input type="email" class="form-control" name="mail2" aria-describedby="emailHelp" placeholder="Confirmation Adresse Email">
                    </div>
                    <div class="form-group">
                      <label for="passwordForm">Mot de Passe</label>
                      <input type="password" class="form-control" name="pass" placeholder="Mot de Passe">
                    </div>
                    <div class="form-group">
                      <label for="passwordForm">Confirmation Mot de Passe</label>
                      <input type="password" class="form-control" name="pass2" placeholder="Confirmation Mot de Passe">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" name="button">Annuler</button>
                    <input type="submit" class="btn btn-success" name="buttonSign"></input>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!--Connection-->
          <button class="btn btn-outline-success" type="button" data-toggle="modal" data-target="#login">Connexion</button>
          <div id="login" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header center">
                  Veuillez entrer vos identifiants
                </div>
                <div class="modal-body">
                  <form method="post" action="controller/login.php">
                    <div class="form-group">
                      <label for="alias">Pseudo</label>
                      <input type="text" class="form-control" name="alias" placeholder="Pseudo">
                    </div>
                    <div class="form-group">
                      <label for="passwordForm">Mot de Passe</label>
                      <input type="password" class="form-control" name="pass" placeholder="Mot de Passe">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" name="button">Annuler</button>
                    <input type="submit" class="btn btn-success" name="buttonLogin"></input>
                  </div>
                </form>
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
    <section class="container sectionmargin row justify-content-around" id="episodes">
    <?php $post = $db->query('SELECT * FROM post ORDER BY id DESC LIMIT 3'); ?>
    <?php while($p = $post->fetch()) { ?>
      <div class="card col-4" style="width: 18rem;">
        <img class="card-img-top" src=".../100px180/" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><?= $p['title'] ?></h5>
          <p class="card-text"><?= $p['message'] ?></p>
          <a class="btn btn-primary" href="article.php?id=<?= $p['id'] ?><?= $p['title'] ?>">Lire l'article</a>
        </div>
      </div>
    <?php } ?>
    </section>
    <!--Biography-->
    <section class="sectionmargin container" id="bio">
      <div class="jumbotron">
        <h1 class="display-4">Jean Forteroche</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="view/bio.php" role="button">Lire la suite</a>
      </div>
    </section>
    <!--Contact-->
    <section id="contact" class="container sectionmargin">
      <h1 class="titlestyle textcolor">Formulaire de Contact</h1>
      <form action="model/mail.php" method="post">
        <div class="form-group">
          <label for="exampleFormControlInput1" class="textcolor">Adresse Email</label>
          <input name="mail" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Adresse Email">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1" class="textcolor">Message</label>
          <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Votre Message"></textarea>
        </div>
        <div class="form-group alignleft">
          <button type="submit" class="btn btn-primary" name="button">Envoyer</button>
        </div>
      </form>
    </section>
    <!--Footer-->
    <?php require'footer.php' ?>
  </body>
</html>
