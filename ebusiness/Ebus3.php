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
    echo "Name: ". $_SESSION["user_name"]. "<br/>";
    echo "Total is " . $_SESSION ["total"]. "<br/>";
    echo "Email: " . $_SESSION["user_email"] . "<br/>";
   
    ?>
    </body>
</html>