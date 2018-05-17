<?php
  $post = $bdd->query('SELECT * FROM post ORDER BY id DESC');
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <?php
    $title = "Liste des episodes";
    require'../model/db.php';
    require'head.php';
    ?>
    <body>
      <?php require'header.php' ?>
      <section>
        <ul>
          <?php while($a = $post->fetch()) { ?>
          <li><?= $a['title'] ?></li>
          <?php } ?>
        </ul>
      </section>
      <?php require'footer.php'; ?>
    </body>
</html>
