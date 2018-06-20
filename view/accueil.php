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
    <?php require'header.php' ?>
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
        <img class="card-img-top" src="public/pictures/Alaska.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><?= $p['title'] ?></h5>
          <p class="card-text"><?= $p['message'] ?></p>
          <a class="btn btn-primary" href="?action=article&id=<?= $p['id'] ?>">Lire l'article</a>
        </div>
      </div>
    <?php } ?>
    </section>
    <!--Biography-->
    <section class="sectionmargin container" id="bio">
      <div class="jumbotron">
        <h1 class="display-4">Jean Forteroche</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
        <hr class="my-4">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
        <a class="btn btn-primary btn-lg" href="?action=bio" role="button">Lire la suite</a>
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
