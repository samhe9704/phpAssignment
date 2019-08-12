<head>
<link rel="stylesheet" href="../css/order_style.css">
<?php
    require "init.php";
    include "functions.php";
?>
</head>
<div>
    <h2>Your Order Details : </h2>
</div>
<div>
<?php

    session_start();

    printCartTitle();
    if(isset($_SESSION['p_id'])){
            //print the order detail table
        for($i=0; $i < sizeof($_SESSION['p_id_cart']); $i++){
            print "<tr>\n";
            print "\t<td>".$_SESSION['p_id_cart'][$i]."</td>\n";
            print "\t<td>".$_SESSION['p_name_cart'][$i]."</td>\n";
            print "\t<td>$ ".$_SESSION['p_price_cart'][$i]."</td>\n";
            print "\t<td>".$_SESSION['p_amount_cart'][$i]."</td>\n";
            // add the unit total price for each product
            $total_price= (double)$_SESSION['p_amount_cart'][$i] * (double)$_SESSION['p_price_cart'][$i];
            $_SESSION['p_total_price'] = $total_price;
            //save each unit total price into an array
            $_SESSION['p_total_value'][] = $_SESSION['p_total_price'];
            print "\t<td>$ ".$total_price."</td>\n";
            $final_price += $total_price;
            print "</tr>";
        
            }
        
            print "<tr>\n";
            print "\t<td>Total value : $ ".$final_price."</td>\n";
            // $_SESSION['p_final_price'] = $final_price;
            print "</tr>";
            print "</table>";
        
        }
?>
<br>
</div>
<div>
<form name="info_form" action="sent_email.php" method="post" onsubmit="return ValidateEmail(document.info_form.your_email)">
    <label>First Name</label>
    <input type="text" name="your_firstname" required pattern="[A-Za-z]{1,}" placeholder="Enter your first name"><br>
    <label>Last Name</label>
    <input type="text" name="your_lastname" required pattern="[A-Za-z]{1,}" placeholder="Enter your last name"><br>
    <label>Address</label>
    <input type="text" name="your_address" required pattern="[A-Za-z0-9\s]{1,}" placeholder="Enter your address"><br>
    <label>Suburb</label>
    <input type="text" name="your_suburb" required pattern="[A-Za-z\s]{1,}" placeholder="Enter your suburb"><br>
    <label>State</label>
    <input type="text" name="your_state" required pattern="[A-Za-z\s]{1,}" placeholder="Enter your state"><br>
    <label>Country</label>
    <input type="text" name="your_country" required pattern="[A-Za-z\s]{1,}" placeholder="Enter your country"><br>
    <label>Email</label>
    <input type="text" name="your_email" required placeholder="Enter your email"><br>
    <br>
    <br>
    <input id="buy" type="submit" name="purchase" value="Purchase">
    </form>
    
</div>
<script>
    //design the email pattern
    function ValidateEmail(mail) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(info_form.your_email.value))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
}
    </script>
</html>