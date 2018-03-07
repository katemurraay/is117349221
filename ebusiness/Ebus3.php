<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head> 
    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
    </script>
    
    <title>RECEIPT</title>
    </head>

<body>
    <h1>Thank you for shopping with us.</h1>
    
    <br/>
    
    
    <?php   
            // Echo session variables that were set on previous page
            echo "<strong>Name: </strong> ". $_POST["first_name"];
            echo " " . $_POST["last_name"] .  "<br/>"; 
            echo "<strong>Email: </strong>" . $_POST["email"] . "<br/>";
            echo "<strong>Your total is: </strong> $" . $_SESSION["total"] . ".";
            ?>
    </body>
</html>