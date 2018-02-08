/"global $ "/

function calcsub(){
    
    var argsubtotal;
    
    if(document.getElementById('salesforce').checked){
        argsubtotal = 100;
    }
else {
    argsubtotal = 300;
    }
    
    display(argsubtotal);
}

function display(parm1){
    
    document.getElementById("subtotal").value = parm1;
    document.getElementById("total").value = parm1;
    
    enablebtnproceed();
    }
    
    
    function enablebtnproceed(){
        $('#btnproceed').prop('disabled', false);
         }
         
         function disablebtnproceed(){
             $('#btnproceed').prop('disabled', true);
         }