<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        
        <title> Enter Details</title>
        <style>
        
        /* Style the side navigation */
.sidenav {
    height: 100%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
}


/* Side navigation links */
.sidenav a {
    color: white;
    padding: 16px;
    text-decoration: none;
    display: block;
    text-align:center;
}

/* Change colour on hover */
.sidenav a:hover {
    background-color: #ddd;
    color: black;
}
* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 10px 10px 10px 0;
    display: inline-block;
}


    

.container {
    border-radius: 5px;
    background-color: #99CCFF;
    padding: 20px;
    margin-left: 200px;
    padding-left: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/*When screen is less than 600px wide*/
@media (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}


body {
    font-family: "verdana";
     background:url("back_ground.jpg");
     background-repeat:no-repeat;
     background-size:cover;
}

h1 {
    text-align:center;
}
/*styling buttons*/
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 13px 26px;
    text-align: center;
    text-decoration: none;
    font-size: 13px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    display:inline-block;
    cursor: pointer;
   
    
}
.btnpurchase {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
  position: absolute;
 
    top:57%;  
     left:480px;
}

.btnpurchase:hover {
    background-color: #4CAF50;
    color: white;
}

.btnvalidate {
    background-color: white; 
    color: black; 
    border: 2px solid #0840F6;
    position: absolute;
    left:480px;
}
.btnvalidate:hover {
    background-color: #0840F6;
    color: white;
}
</style>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body>
        
        <h1>Please enter your Payment Details</h1>
        
        <div class="sidenav">
            <a href ="../homepage.html"><img src="../home_icon.jpg" width=25px height=20px></a>
            <a href="cloud_services.html">Cloud Services</a>
            </div>
        
            <div class="container">
<form method = "POST" action = "Ebus3.php">
    <div class="row">
      <div class="col-25">
                <label for="user_fname">
                    First Name:
                </label>
                </div>
                 <div class="col-75">
                <input type="textbox" name="first_name" id="user_fname" placeholder="Enter First Name" maxlength="32">
                   </div>
    </div>
    <div class="row">
      <div class="col-25">
                 <label for="user_lname">
                    Last Name:
                </label>
                </div>
                 <div class="col-75">
                <input type="textbox" name="last_name"id="user_lname" placeholder="Enter Last Name" maxlength="32">
                   </div>
                   
                </div>
                    <div class="row">
                  <div class="col-25">
                <label for = "user_email">
                    Email Address:
                    </label>
                    </div>
                    <div class="col-75">
                <input type ="textbox" name="email" id="user_email" placeholder ="Enter Email Address" maxlength="100">
                </div>
                </div>
                <div class="row">
                <div class="col-25">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
                <label for="user_pin">
                     PIN 
                     
                </label>
                </div>
                <div class="col-75">
             <input type="password" id="user_pin" placeholder="Enter Card Pin" maxlength="4">
                    </div>
                    </div>
                    
   
        
  <button type="Submit" class="button btnpurchase" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
                
            </form>
            
        </div>
            
           <button class="button btnvalidate" onClick="validateDetails()"> Validate </button>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
      
           
        
             <?php
            // Set session variables
            $_SESSION["total"] = $_POST["total"];
        
            ?>
    </body>
    
    
    
</html>

