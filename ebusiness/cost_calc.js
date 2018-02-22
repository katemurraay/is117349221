/* global $ */

function calcSub(){
    
    var argSubTotal;
    
    if(document.getElementById('salesforce').checked) {
      argSubTotal = 100;
    }
    else if(document.getElementById('cloud9').checked) {
      argSubTotal = 200;
    }
    else if(document.getElementById('aws').checked) {
      argSubTotal = 300;
    
    }
    else 
    argSubTotal = 400;
    
    display(argSubTotal);
}
calcDiv(argSubTotal);
    
}
function calcDiv(parm1){
  var num1, num2, num3;
  num1 = .05
  num2 = parm1 * num1;
  document.getElementById("discount").value = num2;
  num3 = parm1 - num2
  calcVat(num3)

}

function display(parm1){
  document.getElementById("subtotal").value = parm1;
  enablebtnProceed();
}

function calcVat(num1){
  var vat, total;
  vat = num1 * .1
  document.getElementById("vat").value = vat
  total = num1 - vat
  document.getElementById("total").value = total
}

function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed(){
    $('#btnProceed').prop('disabled', true);
}


function display(parm1){
  
  document.getElementById("subtotal").value = parm1;
  document.getElementById("total").value = parm1;
        
  enablebtnProceed();
}


function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed(){
    $('#btnProceed').prop('disabled', true);
}