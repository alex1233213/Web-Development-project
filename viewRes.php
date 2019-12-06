<?php
      require_once "db.php";
      require_once "userSession.php";

?>


<?php
   require_once "header.php";

   //store the username
	$user = $_SESSION['username'];

	$_SESSION['reservationPage'] = True;

		include "myFunctions.php";
	if(isset($_GET['id'])) {


		  $isbn = $_GET['id'];


			$sql_check_reserve = "select isbn from reservations where isbn='".$isbn."';";

		   $result = mysqli_query($db, $sql_check_reserve);


		   if(mysqli_num_rows($result) > 0) {

				 $_SESSION['reserveError'] = "The book you chose cannot be reserved";


             header('Location: index.php');

			  } else {

	          //record the date
				 $date = date('Y-m-d');


				//add book into reservation  table
				 $sql_add_res = "insert into reservations values ('".$isbn."', '".$user."' , '".$date."') ;";
				 $sql_mark_reserve = "update books set reserved='Y' where isbn='$isbn'";



				 $add_result = mysqli_query($db, $sql_add_res);
				 $mark_result = mysqli_query($db, $sql_mark_reserve);

				 if($add_result === False || $mark_result === False) {
					printf ("<h3>error: %s:</h3>", mysqli_error($db));
				} else {
					echo "<h1>Your reservation for this book was successful<br>Your list of reserved books:</h1>";

					//display the books reserved
					$sql_display_reserved = "select books.isbn, booktitle, author, edition, year, reserveddate from books
											join reservations on books.isbn=reservations.isbn where reservations.username='$user';";

					$reserved_result = mysqli_query($db , $sql_display_reserved);
					while($row = mysqli_fetch_assoc($reserved_result)) {
						displayBooks($row, $row['isbn']);
					}
				mysqli_free_result($reserved_result);
				}
			  }


	}else {
         if(isset($_SESSION['message'])) {
            echo "<h2>".$_SESSION['message']."</h2>";
            unset($_SESSION['message']);
         }
			//display the books reserved
			$sql_display_reserved = "select books.isbn, booktitle, author, edition, year from books
								  join reservations on books.isbn=reservations.isbn where reservations.username='$user';";

				$reserved_result = mysqli_query($db , $sql_display_reserved);


				if(mysqli_num_rows($reserved_result) > 0)	 {

					while($row = mysqli_fetch_assoc($reserved_result)) {
						displayBooks($row, $row['isbn']);
					}
				} else {
					$_SESSION['reserveError'] = "You do not have any books reserved";
					echo "
						<span class=\"reserveError\">".
							$_SESSION['reserveError']."
						</span>
					";

            unset($_SESSION['reserveError']);
				mysqli_free_result($reserved_result);
		}

	}

	require_once "footer.php";



   mysqli_close($db);
?>
