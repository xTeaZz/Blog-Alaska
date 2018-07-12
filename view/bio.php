<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <?php
        $title = "Biographie de Jean Forteroche";
        require'head.php';
      ?>
  <body>
    <?php
      session_start();
      if (isset($_SESSION['alias'])) {
        if ($_SESSION['admin'] == 1) {
          require'adminheader.php';
        }
        else{
          require'logedheader.php';
        }
      }
      else {
        require'header.php';
      }
    ?>
    <section class="container paddingtop">

    </section>
    <?php require'footer.php'; ?>
  </body>
</html>
