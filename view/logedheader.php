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
          <a class="nav-link" href="index.php#contact">Contact</a>
        </li>
      </ul>
    </div>
    <div class="">
      <p class="navbar-brand">Bonjour <?=$_SESSION['alias']?></p>
    </div>
    <!--Deconnection-->
      <form method="post" action="index.php?action=logout">
        <input type="submit" class="btn btn-outline-danger" name="buttonLogout" value="Déconnexion"></input>
      </form>
  </nav>
</header>
