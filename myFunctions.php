<?php
	require_once "userSession.php";


	//this function finds the books from the database based on a category
	function findBook($db, $cat){

      $sql = "select isbn, booktitle, author, edition, year, reserved from books where categoryID=$cat;";

      $result_category = mysqli_query($db, $sql);


	//print details
      if(mysqli_num_rows($result_category) > 0) {
            while($row = mysqli_fetch_assoc($result_category)) {
               displayBooks($row, $row['isbn']);
            }
         } else {
			 $_SESSION['reserveError'] = "The chosen category has no books available";
            echo "
				<span id=\"reserveError\">".
					$_SESSION['reserveError']."
				</span>
			";
      }
		unset($_SESSION['reserveError']);
      mysqli_free_result($result_category);
   }


   //this function takes a row retrieved from the database and prints out values
   function displayBooks($row, $isbn) {




      echo "<pre>
            <div class=\"column\">
               <h2>Book Title: ".htmlentities($row['booktitle'])."</h2>
               <p>Edition: " .htmlentities($row['edition'])."</p>
               <p>Year of release: " .htmlentities($row['year'])."</p>
               <p>Author: ".htmlentities($row['author'])."</p><br>";

			   $isbn_values = array();
			   array_push($isbn_values , $isbn);

				if($_SESSION['reservationPage'] == False) {

					//If the user is not on the reservations page then display reserve buttons
				   foreach($isbn_values as $isbn) {
						echo "<a class=\"reservelink\" href=\"viewRes.php?id=". $isbn ."\">Reserve</a><br>";
					}//otherwise display cancel reservation buttons
				} else {
					foreach($isbn_values as $isbn) {
						echo "<a class=\"cancellink\" href=\"deleteReservation.php?id=". $isbn ."\">Cancel Reservation</a><br>";
						}
				}


            echo "</div><br>";
         echo "</pre>";
   }
?>
