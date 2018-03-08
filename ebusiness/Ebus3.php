<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta charset="utf-8"/>
    <style>
        body{
            font-family:"verdana";
        }
        .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
      width:25%;      
        }
    </style>
    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
    
    
    <title>RECEIPT</title>
    </head>

<body>
    <h1 style="text-align:center;">RECEIPT</h1><br/>
    <hr style="width:100%; color:black;">
    <h2 style="text-align:center;">Thank you for shopping with us.</h2>
    
    <br/>
    
    <div class= "center">
    <?php   
            // Echo session variables that were set on previous page
            echo "<strong>Name: </strong> ". $_POST["first_name"];
            echo " " . $_POST["last_name"] .  "<br/>"; 
            echo "<strong>Email: </strong>" . $_POST["email"] . "<br/>";
            echo "<strong>Your total is: </strong> $" . $_SESSION["total"] . ".";
            ?>
            </div>
    </body>
</html>