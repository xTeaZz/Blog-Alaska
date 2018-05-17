<?php require'../model/db.php'; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <?php
    $title = "Liste des episodes";
    require'../model/db.php';
    require'head.php';
    ?>
    <body>
      <?php require'header.php'; ?>
      <section>
        <ul>
          <?php $post = $db->query('SELECT * FROM post ORDER BY id DESC'); ?>
          <?php while($p = $post->fetch()) { ?>
          <li><a href="article.php?id=<? $p['id'] ?>"><?= $p['title'] ?></a></li>
          <?php } ?>
        </ul>
      </section>
      <?php require'footer.php'; ?>
    </body>
</html>

<?php $post = $db->query('SELECT * FROM post ORDER BY id DESC'); ?>
