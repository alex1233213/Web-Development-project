<?php
   require_once "header.php";
   require_once "userSession.php";
?>

   <?php
      require_once "myFunctions.php";
      require_once "db.php";

      $travel = 5;

      findBook($db, $travel);

      mysqli_close($db);
   ?>




<?php
   require_once "footer.php";
?>
