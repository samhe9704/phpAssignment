<head>
<script>
    // check if the cart is empty. if so, the hidden text filed won't have content and return false
    function isEnabled(){
        var checkData = document.forms["check_item"]["hide"].value;

        if(checkData == ""){
            alert("Your shopping cart is empty");
            
            return false;
    }
}
</script>
<link rel="stylesheet" href="../css/home_style.css">
</head>

<div>
    <h1>Shopping Cart</h1>
</div>
<div>
  <?php
    require_once "init.php";
    include "functions.php";
  ?>
<?php
session_start();


if (isset($_POST['add']) && isset($_SESSION['p_id'])) {
// pass all the data in to array
if(compareValue((int)$_POST['amount'], (int)$_SESSION['p_stock'])){
$_SESSION['p_id_cart'][] = $_SESSION['p_id'];
$_SESSION['p_name_cart'][] = $_SESSION['p_name'];
$_SESSION['p_price_cart'][] = $_SESSION['p_price'];
$_SESSION['amount'] = $_POST['amount'];
$_SESSION['p_amount_cart'][] = $_SESSION['amount'];
$_SESSION['p_stock_cart'][] = $_SESSION['p_stock'];
}
else{
?>
<!-- print out warning message -->
<h2>Sorry. We don't have enough stock!</h2>
<?php
}
}

printCartTitle();

if(isset($_SESSION['p_id']) && isset($_SESSION['p_id_cart']) && count($_SESSION['p_id_cart']) > 1){
    
    for($y=0; $y < count($_SESSION['p_id_cart']); $y++){

        for($x=$y+1; $x < count($_SESSION['p_id_cart']); $x++){
            $amount_next = (int)$_SESSION['p_amount_cart'][$x];
            $stock_next = (int)$_SESSION['p_stock_cart'][$x];
            if($_SESSION['p_id_cart'][$y] == $_SESSION['p_id_cart'][$x]){
                //search the same product. if finds, get their amount sum, put it in the old one and unset the latest one
            if(sum((int)$_SESSION['p_amount_cart'][$y], (int)$_SESSION['p_amount_cart'][$x]) <= $stock_next){
                (int)$_SESSION['p_amount_cart'][$y] += (int)$_SESSION['p_amount_cart'][$x];
                unset($_SESSION['p_id_cart'][$x]);
                unset($_SESSION['p_name_cart'][$x]);
                unset($_SESSION['p_price_cart'][$x]);
                unset($_SESSION['p_amount_cart'][$x]);
            }
            else{
                ?>
                <h2>Sorry. We don't have enough stock!</h2>
                <?php
                //if the latest add amount is more than in stock, say no and unset it
                unset($_SESSION['p_id_cart'][$x]);
                unset($_SESSION['p_name_cart'][$x]);
                unset($_SESSION['p_price_cart'][$x]);
                unset($_SESSION['p_amount_cart'][$x]);
            }
        }
    }
}
}

if(isset($_SESSION['p_id_cart'])){

for($i=0; $i < sizeof($_SESSION['p_id_cart']); $i++){
    //print out the cart table
    print "<tr>\n";
    print "\t<td>".$_SESSION['p_id_cart'][$i]."</td>\n";
    print "\t<td>".$_SESSION['p_name_cart'][$i]."</td>\n";
    print "\t<td>$ ".$_SESSION['p_price_cart'][$i]."</td>\n";
    print "\t<td>".$_SESSION['p_amount_cart'][$i]."</td>\n";
    $total_price= (double)$_SESSION['p_amount_cart'][$i] * (double)$_SESSION['p_price_cart'][$i];

    print "\t<td>$ ".$total_price."</td>\n";
    $final_price += $total_price;
    print "</tr>";

    }

    print "<tr>\n";
    print "\t<td>Total value : $ ".$final_price."</td>\n";
    $_SESSION['p_final_price'] = $final_price;
    print "</tr>";

}
else{
    ?>
    <h2>Your cart is empty</h2>
    <?php
}
print "</table>";
?>
<form name="check_item" action="order_info.php" method="post" target="_blank" onsubmit="return isEnabled()">
<br>
<input type="text" name="hide" hidden value="<?php if(isset($_SESSION['p_name_cart'])){echo "something";}?>">

<input type="submit" id="checkout" name="checkout" value="checkout items">
<br>
</form>
<form action="unset.php" method="post">
<input type="submit" name="clear" value="clear cart" >
</form>

</div>
<?php
    // compare the amount entered and the stock
    function compareValue($a, $b){
        return (int)$a < (int)$b;
    }
    // get the sum of two objects
    function sum($a, $b){
        return (int)$a + (int)$b;
    }
?>