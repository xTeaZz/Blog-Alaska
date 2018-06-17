<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <?php require'head.php'; ?>
    <body>
      <?php require'header.php' ?>
      <section>
        <h1><?=$post['title']?></h1>
        <p><?= $post['message']?></p>
      </section>
      <?php require'footer.php'; ?>
    </body>
</html>
