<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
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
/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
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
           
           label {
            padding: 8px 8px 8px 0;
            display: inline-block;
            }

            .container {
                border-radius: 5px;
                background-color: #99CCFF;
                padding: 10px;
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
.container2 {
                
                border-radius: 5px;
                background-color: #99CCFF;
                padding: 10px;
                margin-left: 200px;
                padding-left: 20px;
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
.btncart {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
  position: absolute;
 
    top: 88%;  
     left:780px;
}

.btncart:hover {
    background-color: #4CAF50;
    color: white;
}

.btncalculate {
    background-color: white; 
    color: black; 
    border: 2px solid #FF8900;
    position: absolute;
    top:78%;
    left:780px;
}
.btncalculate:hover {
    background-color: #FF8900;
    color: white;
}
.btnclear {
    background-color: red; 
    color: white; 
    border: 2px solid white;
    position: absolute;
    top:78%;
   left:930px;
}
.btnclear:hover {
    background-color: white;
    color: red;
}

        </style>

    </head>
    
    <body>
        
             <h1>Select a Product</h1>
             <div class="sidenav">
            <a href ="../homepage.html"><img src="../home_icon.jpg" alt= home_icon style ="width:25px; height:20px;"></a>
            <a href="../cv_page1.html">Curriculum Vitae</a>
            <a href="cloud_services.html">Cloud Services</a>
            </div>
        
        <div class="container">
        <form method = "POST" action = "Ebus2.php">
            <div class="row">
              <div class="col-25">
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                Salesforce @ $100
            </label>
                </div>
            </div>
            
            
            <div class="row">
      <div class="col-25">
         <label for="Cloud9">
                <input type="radio" id="cloud9" name="product" checked onClick="disablebtnProceed()">
                Cloud 9 @ $200
            </label>
            </div>
            </div>
            
            
            <div class="row">
             <div class="col-25">
            <label for="aws">
                <input type = "radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
            </label>
            </div>
            </div>
            <div class="row">
      <div class="col-25">
            <label for="Gmail">
                <input type = "radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail @ $400
                
                
            </label>
            
            </div>
            </div>
            </div>
            <br/>
            
            
            <div class="container2">
            <div class="row">
      <div class="col-25">
            <label for="subtotal">
                Sub Total: 
                 </div>
                <div class="col-75">
                  
                    <input type="text" id="subtotal" value="$0.00" readonly/>
                </div>
                </div>
            </label>
            
           
            <div class="row">
          <div class="col-25">
            <label for="discount">
                Discount:
                
                </div>
                <div class="col-75">
                <input type="text" id="discount" name="discount" value="$0.00" readonly/>
            </div>
            </div>
            </label>
            
            <div class="row">
          <div class="col-25">
            <label for="vat">
            VAT:
                
                </div>
                <div class="col-75">
                <input type="text" id="vat" name="vat" value="$0.00" readonly/>
               
            </div>
            </div>
             </label>
            
            <div class="row">
      <div class="col-25">
            <label for="Total">
            Total:
            
                </div>
                <div class="col-75">
              
                <input type="text" id="total" name="total" value="$0.00" readonly/>
                
            </div>
            </div>
            </label>
            
           </div>
            
            
        </form>
        <button class="button btncalculate" onClick="calcSub()" class="Calculate button1">Calculate Cost</button>
        
        <br/>
        <br/>
        <br/>
        <a href="Ebus2.php">
        <button class="button btncart" type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
        </a>
        <a role="button" href="Ebus1.php">
            <button class="button btnclear">Clear Choice</button>
            </a>
      
        
         <?php
        //Set session variables
        $_SESSION ["total"] =$_POST ["total"];
       
        ?>
    </body>
</html>