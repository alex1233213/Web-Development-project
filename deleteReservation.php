<?php
   require_once "db.php";
   require_once "userSession.php";
   require_once "myFunctions.php";


   require_once "header.php";

   if(isset($_GET['id'])) {

      //cancel reservation statemetns
      $isbn = $_GET['id'];

      $sql_delete_res = "delete from reservations where isbn='$isbn';";
      $sql_mark_unres = "update books set reserved='N' where isbn='$isbn'";


      $delete_res = mysqli_query($db, $sql_delete_res);
      $del_mark_res = mysqli_query($db, $sql_mark_unres);


      if($delete_res === False || $del_mark_res === False) {
        printf ("<h3>error: %s:</h3>", mysqli_error($db));
     } else {
        $_SESSION['message'] = "Reservation successfuly canceled";
        header('Location: viewRes.php');
     }
   }


   require_once "footer.php";

   mysqli_close($db);
?>
