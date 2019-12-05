<?php
   require_once "header.php";
   require_once "userSession.php";
?>

   <?php
      require_once "findBook.php";
      require_once "db.php";

      $tech = 4;

      findBook($db, $tech);

      mysqli_close($db);
   ?>




<?php
   require_once "footer.php";
?>
