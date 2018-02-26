<?php
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        
        <title> Enter Details</title>
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body>
        
        <h4>Please enter your payment details.</h4>
        
            <br />
<form method = "POST" action = "Ebus3.php">
                <label for="user_name">
                    Name
                </label>
                <br/>
                <input type="textbox" id="user_name" placeholder="Enter Name" maxlength="32">
                <br/>
                <label for = "user_email">
                    Email Address
                    </label>
                    <br/>
                <input type ="textbox" id="user_email" placeholder ="Enter Email Address" maxlength="100">
                <br/>
                <label for="user_pin">
                     PIN 
                </label>
                <br/>
                
                <input type="password" id="user_pin" placeholder="Enter Card Pin" maxlength="4">
                    <br/>
<button type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
                
            </form>
            
            <br />
            
            <button onClick="validateDetails()"> Validate </button>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        <?php
        //Set session variables
        $_SESSION ["total"] = $_POST["total"];
        ?>
        
    </body>
    
    
    
</html>

