<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head> 
    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
    
    var x=document.cookie;
    window.onload= function increment(i)
    

{
var n = 171000, orderno;
  orderno = n+1 ;
  display(orderno);
  
}



function display(k){
    
    document.getElementById("order_no").value = k;
}
        
    </script>
    
    <title>RECEIPT</title>
    </head>

<body>
    <h1>Thank you for shopping with us.</h1><br/>
    <h2>Order Number</h2>
    <input type="text" id="order_no" value="0.00" readonly/>
    <br/>
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