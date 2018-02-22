/* global $ */

function validateDetails(){
    
    var pin, name, email;
    
    pin = document.getElementById("user_pin").value;
    name = document.getElementById("user_name").value;
    email= document.getElementById("user_email").value;
    
    if (pin==""){
        alert("Please enter your PIN");
        }
    else if (String(pin).length<4){
        alert("Please make sure your PIN is accurate");
        }
    else if (name==""){
        alert("Please enter your Name");
    }
    else if (String(name).length<2){
        alert("Please enter your Name");
    }
    else if (String(email).length<5){
        alert("Please enter your Name");
    }
    
    else if (email=="") {
        alert("Please enter your Email");
    }
    else{
        enablebtnPurchase();
 }
}

function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}

function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
}
