<?php
include "functions.php";

session_start();
//put user's email
$address = $_POST['your_email'];

$subject = "Your order details"; 
$header = 'From :  GrocerryStore@example.com' . "\r\n";
//save the string in message 
$message = buildMsg();

//sent the email
mail($address, $subject, $message, $header);

?>
<head>
<link rel="stylesheet" href="../css/home_style.css">
</head>
<h1>We are appreciate to recieve your order</h1>
<h1>Your order details is already sent to your email</h1>
<?php session_unset();?>
<a href="home_left.php">Click here to return home</a>
<?php
    function buildMsg(){
        //print out the customer's information
        $msgTitle = "Name : " . $_POST['your_firstname'] .' '. $_POST['your_lastname'] ."\n".
                "Address : ". $_POST['your_address']."\n".
                "Suburb : ". $_POST['your_suburb']. "\n".
                "State : ". $_POST['your_state']. "\n".
                "Country : ". $_POST['your_country']. "\n".
                "Your order Details : ". "\n"."\n";
        $msgDetail = "";
        //print out the customer's shopping information
        for($i=0; $i < sizeof($_SESSION['p_id_cart']); $i++){
            $msgDetail = $msgDetail."Product : ".$_SESSION['p_name_cart'][$i]."\n".
                                    "Unit Total Price : ".$_SESSION['p_total_value'][$i]."\n";
        }
        $msgDetail = $msgDetail."\n"."\n"."\n";
        //print out the final price
        $msgFinalprice = "Total Value :  $".$_SESSION['p_final_price']."\n";
        //greeting word
        $msgRegard = "Regards"."\n".
                        "Grocery Store";
        //mix all the string and return
        $msg = $msgTitle.$msgDetail.$msgFinalprice.$msgRegard;
        return $msg;
    }
?>