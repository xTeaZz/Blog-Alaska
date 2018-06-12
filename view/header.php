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
          <a class="nav-link" href="episodes.php">Episodes<span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="bio.php">Jean Forteroche<span class="sr-only"></span></a>
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
