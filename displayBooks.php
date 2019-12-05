<?php


   //this function takes a row retrieved from the database and prints out values
   function displayBooks($row, $isbn) {
      echo "<pre>
            <div class=\"column\">
               <h2>Book Title: ".htmlentities($row['booktitle'])."</h2>
               <p>Edition: " .htmlentities($row['edition'])."</p>
               <p>Year of release: " .htmlentities($row['year'])."</p>
               <p>Author: ".htmlentities($row['author'])."</p><br>";
               if ($_SESSION['reservations'] == False) {
                  echo "<input class=\"reservebutton\" name=\"$isbn\" type=\"submit\" value=\"Reserve\"><br>";
               }
            echo "</div><br>";
         echo "</pre>";
   }

?>
