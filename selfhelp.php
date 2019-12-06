<?php
   require_once "header.php";
   require_once "userSession.php";
?>

   <?php
      require_once "myFunctions.php";
      require_once "db.php";

      $sf = 6;

      findBook($db, $sf);

      mysqli_close($db);
   ?>




<?php
   require_once "footer.php";
?>
