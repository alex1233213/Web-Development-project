<?php
   function findBook($db, $cat){

      $sql = "select * from books where categoryID=$cat and reserved='N';";

      $result = mysqli_query($db, $sql);


      if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               echo "<p>".join(" ", $row)."</p>";
               echo "<br>";
            }
         } else {
            echo "The chosen category has no books available";
      }
   }
?>
