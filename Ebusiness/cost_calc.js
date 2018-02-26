/* global $ */

function calcSub(){

     var argsubtotal;
     
    if(document.getElementById("salesforce").checked) {
         argsubtotal = 100;
     }  
        else if(document.getElementById("amazon web services").checked) {
         argsubtotal = 300;
     }     
        else if(document.getElementById("cloud 9").checked) {
         argsubtotal = 200;
     }  
        else if(document.getElementById("gmail").checked) {
         argsubtotal = 400;
     }  
    
    calcDisVatTotal(argsubtotal);
}

function calcDisVatTotal(parmSubTotal){
    var Subtotal = parmSubTotal;
    var vatAmt;
    var discountAmt;
    var TotalPrice;
    
    discountAmt = (parmSubTotal * .05);
    vatAmt = (parmSubTotal) * (.1);
    TotalPrice = (parmSubTotal + vatAmt - discountAmt);
    
    display(Subtotal , vatAmt , discountAmt , TotalPrice);
}

function display(parm1 , parm2 , parm3 , parm4){

     document.getElementById("Subtotal").value = parm1;
     document.getElementById("Vat").value = parm2;
     document.getElementById("Discount").value = parm3;
     document.getElementById("Total").value = parm4;
     
     enablebtnProceed();
}

function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed(){
    $('#btnProceed').prop('disabled', true);
}