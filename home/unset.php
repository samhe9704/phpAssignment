<?php
/* this php file is used to unset all the session data*/
session_start();

if (isset($_POST['clear'])) 
    session_unset();
?>
<head>
<link rel="stylesheet" href="../css/home_style.css">
</head>
<h1> Shopping Cart</h1>
<?php
    //print out the table
    printTable();
?>
<h2>Your shopping cart is empty</h2>
<?php
function printTable(){
    print "<table border=5>";
    print "\t<td>Product id</td>\n";
    print "\t<td>Product Name</td>\n";
    print "\t<td>Unit Price</td>\n";
    print "\t<td>Quantity</td>\n";
    print "\t<td>Total Price</td>\n";
    print "</table>";
}
?>
