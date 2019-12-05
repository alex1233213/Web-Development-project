<?php
   require_once "header.php";
   require_once "userSession.php";
?>


   <?php
      require_once "findBook.php";
      require_once "db.php";

      $fiction = 8;

      findBook($db, $fiction);

      mysqli_close($db);
   ?>




<?php
   require_once "footer.php";
?>
