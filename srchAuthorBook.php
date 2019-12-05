<?php
   //create session
   //connect to database
   require_once "userSession.php";
   require_once "db.php";
?>

<?php
   require_once "header.php";
?>



      <?php
         require_once "displayBooks.php";
         $_SESSION['condition'] = "";


         if(isset($_POST['searchinput'])) {

            $input = $_POST['searchinput'];

            //check if input is empty
            if(empty($input)) {
               echo "Please enter the name of the author or book title";
            } else {
               $input = test_input($input, $db);

               //break the string user input into separate keywords
               $input = explode(" ", $input);

               foreach($input as $value) {
                  $_SESSION['condition'] .= " (booktitle like '%". $value."%') or (author like '%".$value."%') or ";
               }



               $_SESSION['condition'] = substr($_SESSION['condition'] ,0 , -4);

               $sql = "select isbn, booktitle, author, edition, year from books where". $_SESSION['condition']. ";";

               $result = mysqli_query($db, $sql);

               if(mysqli_num_rows($result) > 0) {
                     while($row = mysqli_fetch_assoc($result)) {
                        displayBooks($row);
                     }
                  } else  {
                     echo "<p>No entries found</p>";
               }


            mysqli_free_result($result);
            }

         }


         /*This function removes unwanted characters from the user input.
         Also protects against Cross side scripting using htmlspecialchars */
         function test_input($data, $database) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            $data = mysqli_real_escape_string($database, $data);
            return $data;
         }

         unset($_SESSION['condition']);
         mysqli_close($db);
      ?>



<?php
   require_once "footer.php";
?>
