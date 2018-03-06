/* global $ */

function validateDetails(){
    
    var pin, firstname, lastname, email;
    
    pin = document.getElementById("user_pin").value;
    firstname = document.getElementById("user_fname").value;
    lastname = document.getElementById("user_lname").value;
    email= document.getElementById("user_email").value;
    
    if (pin==""){
        alert("Please enter your PIN");
        }
    else if (String(pin).length<4){
        alert("Please make sure your PIN is accurate");
        }
    else if (firstname==""){
        alert("Please enter your Name");
    }
    else if (String(lastname)==""){
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
