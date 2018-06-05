<?php
  require'../model/db.php';
  require'../model/Post.php';
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <?php
    $title = "Liste des episodes";
    require'head.php';
    ?>
    <body>
      <?php require'header.php'; ?>
      <section class="container paddingtop">
        <div class="rows">
          <?php $post = $db->query('SELECT * FROM post ORDER BY id DESC'); ?>
          <?php while($p = $post->fetch()) { ?>
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src=".../100px180/" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?= $p['title'] ?></h5>
                <p class="card-text"><?= $p['message'] ?></p>
                <a class="btn btn-danger" href="article.php?id=<?= $p['id'] ?><?= $p['title'] ?>">Supprimer l'article</a>
              </div>
          <?php } ?>
        </div>
      </section>
      <?php require'footer.php'; ?>
    </body>
</html>
