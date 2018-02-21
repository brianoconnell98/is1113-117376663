/* global $ */

function calcSub(){

     var argsubtotal;
     
    if(document.getElementById("salesforce").checked) {
         argsubtotal = 100;
     }  
     else if(document.getElementById("cloud 9").checked) {
         argsubtotal = 200;
     }  
     else if(document.getElementById("amazon web services").checked) {
         argsubtotal = 300;
     }  
     else if(document.getElementById("gmail").checked) {
         argsubtotal = 400;
     }  
    
    display(argsubtotal);
}

function display(parm1){

     document.getElementById("Subtotal").value = parm1;
     document.getElementById("Discount").value = parm1;
     document.getElementById("Vat").value = parm1;
     document.getElementById("Total").value = parm1;
     
     enablebtnProceed();
}

function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed(){
    $('#btnProceed').prop('disabled', true);
}