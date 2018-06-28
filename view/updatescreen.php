<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <?php
    $title = "Liste des episodes";
    require'head.php';
    ?>
    <body>
      <?php require'header.php'; ?>
      <section class="container paddingtop">
        <?php while($p = $post->fetch()) { ?>
        <div class="rows">
          <div class="card marginlist" style="width: 18rem;">
            <img class="card-img-top" src=".../100px180/" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?= $p['title'] ?></h5>
            <p class="card-text"><?= $p['message'] ?></p>
            <a class="btn btn-warning" href="?action=updatepost&id=<?= $p['id'] ?>">Modifier l'article</a>
          </div>
        </div>
        <?php } ?>
      </section>
      <?php require'footer.php'; ?>
    </body>
</html>