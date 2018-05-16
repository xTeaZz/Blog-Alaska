<!DOCTYPE html>
<html lang="fr" dir="ltr">
<?php
  $title = "Création d'articles";
  require'../controller/login.php';
  require'../controller/head.php';
?>
  <body>
    <header>

    </header>
    <section>
      <textarea name="postText" class="tinymce"></textarea>
    </section>
    <?php require'../controller/footer.php'; ?>
  </body>
</html>
