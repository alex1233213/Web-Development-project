<?php


   function displayBooks($row) {
      echo "<pre>
            <div class=\"column\">
               
                  <h2>Book Title: ".htmlentities($row['booktitle'])."</h2>
                  <p>Edition: " .htmlentities($row['edition'])."</p>
                  <p>Year of release: " .$row['year']."</p>
                  <p>Author: ". $row['author']."</p>
            </div>
      </pre>";
   }
?>
