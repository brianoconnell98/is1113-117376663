<!DOCTYPE html>
<html>
     <head>
         <!-- title -->
          <title>Select Product</title>
          
          <!-- refer to jQuery -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          
          <!-- refer to javascript -->
          <script type="text/javascript" src="cost_calc.js"></script>
          
     </head>
     
     <body align="center">
     
         <!-- heading -->
         <h3>Select Product</h3>
         
         <br />
         
         <!-- posting on to next page -->
         <form method="POST" action="Ebus2.php">
         
         <!-- salesforce radio button -->
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                salesforce @ $100
            </label>
            
            <br />
            <br />
            <br />
            
         <!-- amazon radio button -->    
            <label for="amazon web services">
                <input type="radio" id="amazon web services" name="product" checked onClick="disablebtnProceed()"/>
                amazon web services @ $300
            </label>
            
            <br />
            <br />
            <br />
            
         <!-- Cloud 9 radio button -->    
            <label for="cloud 9">
                <input type="radio" id="cloud 9" name="product" checked onClick="disablebtnProceed()"/>
                cloud 9 @ $200
            </label>
            
            <br />
            <br />
            <br />
            
         <!-- Gmail radio button -->    
             <label for="gmail">
                <input type="radio" id="gmail" name="product" checked onClick="disablebtnProceed()"/>
                gmail @ $400
            </label>
            
            <br />
            <br />
            <br />
            
         <!-- subtotal textbox -->    
            <label for="Subtotal">
                Sub Total
                <input type="text" id="Subtotal" name="Subtotal" value="0.00" readonly/>
            </label>
            
            <br />
            <br />
            <br /> 
            
         <!-- discount textbox -->    
            <label for="Discount">
                Discount @ 5% 
                (- discount)
                <input type="text" id="Discount" name="Discount" value="0.00" readonly/>
            </label>
            
            <br /> 
            <br />
            <br />
            
         <!-- vat textbox -->    
            <label for="Vat">
                Vat @ 10%
                <input type="text" id="Vat" name="Vat" value="0.00" readonly/>
            </label>
            
            <br />
            <br />
            <br />
            
         <!-- total textbox -->    
            <label for="Total">
                Total (- discount + vat)
                <input type="text" id="Total" name="Total" value="0.00" readonly/>
            </label>
            
            <br />
            <br />
            <br />
            
         <!-- button to submit -->    
            <button type="submit" id="btnProceed" disabled>Add to shopping cart</button>
            
        </form>
        
        <br />
        
        <!-- button to calculate cost and clear selections -->
        <button style="font-size:15px;" onClick="calcSub()">Calculate cost</button>
        
        <a href="Ebus1.php"><button style="font-size:15px; background-color:black; color:white;">Clear Choice</button></a>
        
        <br />
        <br />
        
        <!-- button to homepage -->
        <a href="../Homepage.html"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9kXqwVS9KhCmGPVPj_ZK_3dRqEHLSwzLIU4hQ1QW25ABtmXYVfw" alt"homepage" height="75" width="75"></a>
        
        <br />
        <br />
        
        <!-- footer -->
        <div id = "Footer">
              <p>Copyright 2018 &COPY; All Rights Reserved. Design By Brian O Connell 117376663</p>
          </div>
        
        
    </body>
</html>
