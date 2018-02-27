<?php
session_start()
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- title -->
        <title>RECEIPT</title>
    </head>
    
    <body align="center">
          <!-- subheading -->
          <h4>RECEIPT</h4>
 
          <?php
          //Echo Session variables that were set on previous page
          echo "Name: " . $_POST["name"] . "<br />";
          echo "Email: " . $_POST["Email"] . "<br />";
          echo "Total is: " . $_SESSION["Total"] . "<br />";
          ?>
    </body>
</html>    