<!DOCTYPE html>
<html lang="fr" dir="ltr">
<?php
  $title = "Création d'articles";
  require'../controller/login.php';
  require'head.php';
?>
  <body>
    <header>

    </header>
    <section>
      <form action="" method="post">
        <div class="form-group">
          <label for="title">Titre</label>
          <input type="text" class="form-control" name="title" placeholder="Titre">
        </div>
        <div class="form-group">
          <label for="postText">Texte</label>
          <textarea name="postText" class="tinymce"></textarea>
        </div>
        <input type="submit" class="btn btn-success" name="submit">Envoyer</input>
      </form>
    </section>
    <?php require'footer.php'; ?>
  </body>
</html>

<?php
  if (isset($_POST['title'], $_POST['postText'])) {
    if(!empty($_POST['title']) AND !empty($_POST['postText'])){
      $post_title = htmlspecialchars($_POST['title']);
      $post_message = htmlspecialchars($_POST['message']);

      $insert = $bdd->prepare('INSERT INTO post(title, message, creation_date) VALUES (?, ?,NOW())');
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
