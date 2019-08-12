<?php include "functions.php" ?>
<head>
<script>
    //check if the quantity is inputted
    function validateForm(){
    var x = document.forms["product_info"]["amount"].value;
    if(x==""){
        alert("Quantity must be filled out");
        return false;
    }
}
</script>
    <link rel="stylesheet" href="../css/home_style.css">
</head>
<div>
<h1> Product's details</h1>
</div>
<div>


<?php
    //connect to the database
    $link = mysqli_connect("rerun.it.uts.edu.au", "potiro", "pcXZb(kL", "poti");
    if(!$link)
        die("Fail to connect to poti server");

    session_start();
    //save the chosen product id if there is a id
    $product_id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
    //save sql query
    $selected_product = "select * from products where product_id = '$product_id'";
    $id = "select product_id from products where product_id = '$product_id'";
    $name = "select product_name from products where product_id = '$product_id'";
    $price = "select unit_price from products where product_id = '$product_id'";
    $quantity = "select unit_quantity from products where product_id = '$product_id'";
    $stock = "select in_stock from products where product_id = '$product_id'";
    //get the result from sql database
    $result_product = mysqli_query($link,$selected_product);
    $result_id = mysqli_query($link, $id);
    $result_name = mysqli_query($link, $name);
    $result_price = mysqli_query($link, $price);
    $result_quantity = mysqli_query($link, $quantity);
    $result_stock = mysqli_query($link, $stock);
    //number of products rows
    $num_rows_product = mysqli_num_rows($result_product);
    
    if($num_rows_product > 0) {

        printInfoTitle();

        while( $a_row = mysqli_fetch_row($result_product)) {
            print "<tr>\n";

            foreach ($a_row as $field){
                print "\t<td>$field</td>\n";
            }
            print "</tr>";
        }
        print "</table>";

     //load the product_id of the item
    $b_row = mysqli_fetch_row($result_id);
    foreach ($b_row as $field_id){
        $_SESSION['p_id'] = $field_id;
      
    }
    

    //load the product_name of the item
    $c_row = mysqli_fetch_row($result_name);
    foreach ($c_row as $field_name){
        $_SESSION['p_name'] = $field_name;
    }

    //load the product_price of the item
    $d_row = mysqli_fetch_row($result_price);
    foreach ($d_row as $field_price){
        $_SESSION['p_price'] = $field_price;
    }
    //load the product stock of the item
    $e_row = mysqli_fetch_row($result_stock);
    foreach ($e_row as $field_stock){
        $_SESSION['p_stock'] = $field_stock;
    }
    
    }
    
?>
<?php
    if($num_rows_product > 0) {
?>
<form name="product_info" action="shopping_cart.php"  method="post" target="shopping_list" onsubmit="return validateForm()">
<br>
<label>Quantity: </label>
<input type="text" name="amount" placeholder="Enter your amount" required pattern="[0-9]{1,}">
<br><br>
<input type="submit" name="add" value="add to cart">
</form>
<?php 
    } else {
?>
<h2> please select a product</h2>
<?php        
    }
?>
</div>

<?php
    mysqli_close($link);
?>
