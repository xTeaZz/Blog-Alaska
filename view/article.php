<?php
  require'../model/db.php';
  require'../model/getPost.php';
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <?php
    require'head.php';
    ?>
    <body>
      
      <section>
        <h1><?= $title ?></h1>
        <p><?= $message ?></p>
      </section>
      <?php require'footer.php'; ?>
    </body>
</html>
