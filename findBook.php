<?php
   require_once "displayBooks.php";

   function findBook($db, $cat){

      $sql = "select isbn, booktitle, author, edition, year from books where categoryID=$cat and reserved='N';";

      $result = mysqli_query($db, $sql);


      if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               displayBooks($row);
            }
         } else {
            echo "The chosen category has no books available";
      }
   mysqli_free_result($result);
   }
?>
