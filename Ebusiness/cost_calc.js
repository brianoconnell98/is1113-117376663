/* global $ */

//creating an if statement 
function calcSub(){

     //declaring our variabes
     var argsubtotal;
     
     //if statement 
    if(document.getElementById("salesforce").checked) {
         argsubtotal = 100; // subtotal if salesforce is checked
     }  
        else if(document.getElementById("amazon web services").checked) {
         argsubtotal = 300; // subtotal if amazon web services is checked
     }     
        else if(document.getElementById("cloud 9").checked) {
         argsubtotal = 200; // subtotal if cloud 9 is checked
     }     
        else if(document.getElementById("gmail").checked) {
         argsubtotal = 400; // subtotal if gmail is checked
     }  
    
    calcDisVatTotal(argsubtotal);
}

//Function to calculate discount, vat and total
function calcDisVatTotal(parmSubTotal){
    
    // declaring our variables
    var Subtotal = parmSubTotal;
    var vatAmt;
    var discountAmt;
    var TotalPrice;
    
    // calculate discount value
    discountAmt = (parmSubTotal * .05);
    
    // calculate vat value
    vatAmt = (parmSubTotal * .1);
    
    // calculate total
    TotalPrice = (parmSubTotal + vatAmt - discountAmt);
    
    //pass all the values
    display(Subtotal , vatAmt , discountAmt , TotalPrice);
}

//Function to display all the value passed through
function display(parm1 , parm2 , parm3 , parm4){

     // display subtotal
     document.getElementById("Subtotal").value = parm1; 
     
     // display vat
     document.getElementById("Vat").value = parm2;
     
     // display discount 
     document.getElementById("Discount").value = parm3; 
     
     // display total
     document.getElementById("Total").value = parm4;
     
     enablebtnProceed();
}

// function that enables proceed button
function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

// function that disables proceed button
function disablebtnProceed(){
    $('#btnProceed').prop('disabled', true);
}
