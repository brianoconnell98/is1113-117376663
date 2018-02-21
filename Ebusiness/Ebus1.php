<html>
     <head>
          <title>Select Product</title>
          
          <!--jQuery-->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script type="text/javascript" src="cost_calc.js"></script>
          
     </head>
     
     <body>
     
         <h4>Select Product</h4>
         
         <br/>
         
         <form method="POST" action="Ebus2.php">
         
            <label for="Salesforce">
                <input type="radio" id="Salesforce" name="product" checked onClick="disablebtnProceed()"/>
                Salesforce @ $100
            </label>
            
            </br>
            </br>
            
            <label for="Cloud 9">
                <input type="radio" id="Cloud 9" name="product" checked onClick="disablebtnProceed()"/>
                Cloud 9 @ $200
            </label>
            
            </br>
            </br>
            
            <label for="Amazon Web Services">
                <input type="radio" id="Amazon Web Services" name="product" checked onClick="disablebtnProceed()"/>
                Amazon web services @ $300
            </label>
            
            </br>
            </br>
            
             <label for="Gmail">
                <input type="radio" id="Gmail" name="product" checked onClick="disablebtnProceed()"/>
                Gmail @ $400
            </label>
            
            </br>
            </br>
            
            <label for="Subtotal">
                Sub Total
                <input type="text" id="Subtotal" value="0.00" readonly/>
            </label>
            
            </br>
            
            <label for="Total">
                Total
                <input type="text" id="Total" value="0.00" readonly/>
            </label>
            
            </br>
            </br>
            
            <button type="submit" id="btnProceed" disabled>Add to shopping cart</button>
        </form>
        
        </br>
        
        <button onClick="calcSub()">Calculate cost</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
        
    </body>
</html>