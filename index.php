<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <!--Head-->
  <?php
    $title = "Billet simple pour l'Alaska";
    require'controller/head.php';
  ?>
  <!--Body-->
  <body class="sectionbackground">
    <!--Header-->
    <?php require 'controller/header.php'; ?>
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
    <?php require'controller/footer.php'; ?>
  </body>
</html>
