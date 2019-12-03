<?php
   require_once "header.php";
   require_once "userSession.php";
?>

<div class="main-content">
   <?php
      require_once "findBook.php";
      require_once "db.php";

      $tech = 4;

      findBook($db, $tech);

      mysqli_close($db);
   ?>

</div>



<?php
   require_once "footer.php";
?>
