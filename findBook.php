<?php
   require_once "displayBooks.php";

   function findBook($db, $cat){

      $sql = "select isbn, booktitle, author, edition, year from books where categoryID=$cat;";

      $result_category = mysqli_query($db, $sql);



      if(mysqli_num_rows($result_category) > 0) {
            while($row = mysqli_fetch_assoc($result_category)) {
               displayBooks($row, $row['isbn']);
            }
         } else {
            echo "The chosen category has no books available";
      }
      mysqli_free_result($result_category);
   }
?>
