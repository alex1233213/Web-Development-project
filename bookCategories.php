
<?php
   require_once "header.php";
   require_once "userSession.php";
?>

   <?php
      require_once "myFunctions.php";
      require_once "db.php";

      $category = $_GET['id'];



		//check for  set page




      findBook($db, $category);

      mysqli_close($db);
   ?>




<?php
   require_once "footer.php";
?>
