<!DOCTYPE html>
<html lang="fr" dir="ltr">
<?php
  $title = "Création d'articles";
  require'head.php';
  require'../model/db.php'
?>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="../index.php">Billet simple pour l'Alaska</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="episodes.php">Episodes<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#bio">Jean Forteroche<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <section class="container">
      <form action="" method="post">
        <div class="form-group">
          <label for="title">Titre</label>
          <input type="text" class="form-control" name="title" placeholder="Titre">
        </div>
        <div class="form-group">
          <label for="postText">Texte</label>
          <textarea name="postText" class="tinymce"></textarea>
        </div>
        <input type="submit" class="btn btn-success" name="submit" value="Envoyer"></input>
      </form>
    </section>
    <?php require'footer.php'; ?>
  </body>
</html>

<?php
  if (isset($_POST['title'], $_POST['postText'])) {
    if(!empty($_POST['title']) AND !empty($_POST['postText'])){
      $post_title = htmlspecialchars($_POST['title']);
      $post_message = htmlspecialchars($_POST['postText']);

      $insert = $db->prepare('INSERT INTO post(title, message, creation_date) VALUES (?, ?,NOW())');
      $insert->execute(array($post_title, $post_message));

      $info = "Votre Article a bien était crée";
    } else {
      $info = "Veuillez remplir tous les champs";
    }
  }
  if (isset($info)) {
    echo $info;
  }
?>
