
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
          <h3>RECEIPT </h3>
 
          <?php
          //Echo Session variables that were set on previous page
           echo "Name: " . $_POST["name"] . "<br /> <br />";
       
           echo "Email: " . $_POST["Email"] . "<br /> <br />";
       
           echo "Subtotal: " . $_SESSION["Subtotal"] . " Euro.<br /> <br />";
        
           echo "Discount: " . $_SESSION["Discount"] . " Euro.<br /> <br />";
       
           echo "Vat: " . $_SESSION["Vat"] . " Euro.<br /> <br />";
       
           echo "Total: " . $_SESSION["Total"] . " Euro.<br /> <br />";
       
           ?>
       
           <br />
       
           <br />
       
           <p>Thank you for ordering off cloud services and we look forward to your business again</p>
    </body>
    
</html>    
