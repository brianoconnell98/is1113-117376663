<?php
session_start()
?>

<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    
    <body align="center">
          <h4>RECEIPT</h4>
 
          <?php
          //Echo Session variables that were set on previous page
          echo "Total is " . $_SESSION["Total"] . ".";
          ?>
    </body>
</html>    