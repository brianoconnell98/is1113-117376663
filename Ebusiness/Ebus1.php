<html>
     <head>
          <title>Select Product</title>
          
          <!--jQuery-->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script type="text/javascript" src="cost_calc.js"></script>
          
     </head>
     
     <body align="center">
     
         <h4>Select Product</h4>
         
         <br/>
         
         <form method="POST" action="Ebus2.php">
         
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                salesforce @ $100
            </label>
            
            </br>
            </br>
            </br>
            
            <label for="amazon web services">
                <input type="radio" id="amazon web services" name="product" checked onClick="disablebtnProceed()"/>
                amazon web services @ $300
            </label>
            
            </br>
            </br>
            </br>
            
            <label for="cloud 9">
                <input type="radio" id="cloud 9" name="product" checked onClick="disablebtnProceed()"/>
                cloud 9 @ $200
            </label>
            
            </br>
            </br>
            </br>
            
             <label for="gmail">
                <input type="radio" id="gmail" name="product" checked onClick="disablebtnProceed()"/>
                gmail @ $400
            </label>
            
            </br>
            </br>
            </br>
            
            <label for="Subtotal">
                Sub Total
                <input type="text" id="Subtotal" value="0.00" readonly/>
            </label>
            
            </br>
            </br>
            </br>
            
            <label for="Discount">
                Discount @ 5% 
                (- discount)
                <input type="text" id="Discount" value="0.00" readonly/>
            </label>
            
            </br>
            </br>
            </br>
            
            <label for="Vat">
                Vat @ 10%
                <input type="text" id="Vat" value="0.00" readonly/>
            </label>
            
            </br>
            </br>
            </br>
            
            <label for="Total">
                Total (- discount + vat)
                <input type="text" id="Total" value="0.00" readonly/>
            </label>
            
            </br>
            </br>
            </br>
            
            <button type="submit" id="btnProceed" disabled>Add to shopping cart</button>
        </form>
        
        </br>
        
        <button style="font-size:15px;" onClick="calcSub()">Calculate cost</button>
        <a href="Ebus1.php"><button style="font-size:15px; background-color:black; color:white;">Clear Choice</button></a>
        
        </br>
        </br>
        
        
    </body>
</html>