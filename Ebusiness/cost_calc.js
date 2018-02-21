/* global $ */

function calcSub(){

     var argSubTotal;
     
     if(document.getElementById("Salesforce").checked) {
         argSubTotal = 100;
     }
     if(document.getElementById("Cloud 9").checked) {
         argSubTotal = 200;
     }     
     if(document.getElementById("Amazon Web Services").checked) {
         argSubTotal = 300;
     }
     if(document.getElementById("Gmail").checked) {
         argSubTotal = 400;
      }     
     display(argSubTotal);
}

function display(parm1){

     document.getElementById("Subtotal").value = parm1;
     document.getElementById("Total").value = parm1;
     
     enablebtnProceed();
}

function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed(){
    $('#btnProceed').prop('disabled', true);
}