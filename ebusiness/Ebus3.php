<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head> 
    <title>RECEIPT</title>
    </head>

<body>
    <h1>RECEIPT</h1>
    
    <?php
    //Echo session variables that were set on previous page
    echo "Name: ". $_POST["user_name"];

    echo "Total is " . $_SESSION ["total"]. ".";
     echo "Email: " . $_POST["user_email"] . "<br/>";
   
    ?>
    </body>
</html>