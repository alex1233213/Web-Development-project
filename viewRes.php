<?php
      require_once "db.php";
      require_once "userSession.php";
      require_once "allsqlstatements.php";
?>


<?php
   // require_once "header.php";
   // require_once "displayBooks.php";
   //
   if(isset($_POST['$isbn'])) {
      echo $_POST['$isbn'];
   } else {
      echo "no";
   }
   //    $_SESSION['reservations'] = True;
   //
   //    $isbn = $_POST['isbn'];
   //    $user = $_SESSION['username'];
   //
   //    $result = mysqli_query($db, $sql_check_reserve);
   //
   //
   //    if(mysqli_num_rows($result) > 0) {
   //          $_SESSION['reserveError'] = "This book cannot be reserved";
   //       } else {
   //
   //          //store the reservation date into a cookie
   //          setcookie("reservation_date", date("yyyy-mm-dd"), 0);
   //
   //          //add book into reservation  table
   //          $sql_add_res = "insert into reservations values ('$isbn', '$_SESSION['username']' ," . $_COOKIE['reservation_date']) .";";
   //    }
   //    mysqli_free_result($result);

      //show all reserved books by the user





   mysqli_close($db);
?>
