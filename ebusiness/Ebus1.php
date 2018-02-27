<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>

    </head>
    
    <body>
        
             <h4>Select a Product</h4>
        <br/>
        <form method = "POST" action = "ebus2.php">
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                Salesforce @ $100
            </label>
            
            <br/>
            
            <label for="Cloud9">
                <input type="radio" id="cloud9" name="product" checked onClick="disablebtnProceed()">
                Cloud 9 @ $200
            </label>
            
            
            <br/>
                        
            <label for="aws">
                <input type = "radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
            </label>
            <br/>
            <label for="Gmail">
                <input type = "radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail @ $400
                
                
            </label>
            
            <br/>
            <br/>
            
            <label for="subtotal">
                Sub Total: 
                 <br/>
                <div="inline">
                  
                    <input type="text" id="subtotal" value="$0.00" readonly/>
                </div>
            </label>
            
            <br/><br/>
            
            <label for="discount">
                Discount:
                <br/>
                <input type="text" id="discount" name="total" value="$0.00" readonly/>
            </label>
            <br/><br/>
            <label for="vat">
                VAT:
                <br/>
                <input type="text" id="vat" name="vat" value="$0.00" readonly/>
            </label>
            
            <br/>
            <label for="Total">
            Total:
            <div class="inline1">
                <br/>
                <input type="text" id="total" name="total" value="$0.00" readonly/>
            </div>
            </label>
            <br/>
            
           <br/>
            
            </a>
        </form>
        <button onClick="calcSub()" class="Calculate button1">Calculate Cost</button>
        
        <br/>
        <br/>
        <br/>
        <a href="Ebus2.php">
                <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
        
        <a role="button" href="Ebus1.php">Clear Choice</a>
        <br/><br/><br/><br/>
    </body>
</html>