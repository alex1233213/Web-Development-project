<?php
   require_once "header.php";
   require_once "userSession.php";
?>

   <?php
      require_once "myFunctions.php";
      require_once "db.php";

      $biography = 3;

      findBook($db, $biography);

      mysqli_close($db);
   ?>




<?php
   require_once "footer.php";
?>
