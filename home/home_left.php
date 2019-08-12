<html>
<title>
Grocery Store
</title>
<head>
    <link rel="stylesheet" href="../css/home_style.css">
</head>
<body>

<h1> Grocery Store Catogery </h1>

<div id="category">
<!-- display category image map  -->
    <img src="../image/categories.png" alt="Grocery Store" usemap="#store-map" >
    <map name="store-map">
        <area id="frzfood" shape="rect" coords="11,224,110,176" onmouseover="frozen.style.visibility='visible'" onmouseout="frozen.style.visibility='hidden'">
        <area id="frsfood" shape="rect" coords="129,225,230,175" onmouseover="fresh.style.visibility='visible'" onmouseout="fresh.style.visibility='hidden'">
        <area id="bev" shape="rect" coords="250,225,348,173" onmouseover="beverages.style.visibility='visible'" onmouseout="beverages.style.visibility='hidden'">
        <area id="hh" shape="rect" coords="366,224,471,176" onmouseover="home.style.visibility='visible'" onmouseout="home.style.visibility='hidden'">
        <area id="pfood" shape="rect" coords="486,225,591,177" onmouseover="pet.style.visibility='visible'" onmouseout="pet.style.visibility='hidden'">
    </map>
</div>
<div id="child">
    <!-- five image map, they are hidden if there is no on mouse over -->
    <img src="../image/frozen_food.png" id="frozen" style="position: absolute; top:288px; left:10px; visibility:hidden" alt="frozen food" usemap="#frz-map"
    onmouseover="frozen.style.visibility='visible'" onmouseout="frozen.style.visibility='hidden'">
    <map name="frz-map">
        <area id="1002" shape="rect" coords="7,164,109,218" onmouseover="frozen.style.visibility='visible'"
        href="product_info.php?id=1002" target="detail">
        <area name="1000" shape="rect" coords="75,316,178,366" onmouseover="frozen.style.visibility='visible'"
        href="product_info.php?id=1000" target="detail">
        <area name="1001" shape="rect" coords="195,316,298,366" onmouseover="frozen.style.visibility='visible'"
        href="product_info.php?id=1001" target="detail">
        <area name="1003" shape="rect" coords="248,166,350,220" onmouseover="frozen.style.visibility='visible'"
        href="product_info.php?id=1003" target="detail">
        <area name="1004" shape="rect" coords="318,315,421,365" onmouseover="frozen.style.visibility='visible'"
        href="product_info.php?id=1004" target="detail">
        <area name="1005" shape="rect" coords="438,314,541,364" onmouseover="frozen.style.visibility='visible'"
        href="product_info.php?id=1005" target="detail">
    </map>

    <img src="../image/fresh_food.png" id="fresh" alt="fresh food" usemap="#frs-map"
    style="position: absolute; top:288px; left:8px; visibility:hidden"
    onmouseover="fresh.style.visibility='visible'" onmouseout="fresh.style.visibility='hidden'">
    <map name="frs-map">
        <area id="3002" shape="rect" coords="9,160,89,213" onmouseover="fresh.style.visibility='visible'"
        href="product_info.php?id=3002" target="detail">
        <area name="3000" shape="rect" coords="42,312,149,364" onmouseover="fresh.style.visibility='visible'"
        href="product_info.php?id=3000" target="detail">
        <area name="3001" shape="rect" coords="161,313,268,365" onmouseover="fresh.style.visibility='visible'"
        href="product_info.php?id=3001" target="detail">
        <area name="3003" shape="rect" coords="179,162,259,215" onmouseover="fresh.style.visibility='visible'"
        href="product_info.php?id=3003" target="detail">
        <area name="3004" shape="rect" coords="270,162,350,215" onmouseover="fresh.style.visibility='visible'"
        href="product_info.php?id=3004" target="detail">
        <area name="3006" shape="rect" coords="357,162,437,215" onmouseover="fresh.style.visibility='visible'"
        href="product_info.php?id=3006" target="detail">
        <area name="3007" shape="rect" coords="443,162,523,215" onmouseover="fresh.style.visibility='visible'"
        href="product_info.php?id=3007" target="detail">
        <area name="3005" shape="rect" coords="530,162,610,215" onmouseover="fresh.style.visibility='visible'"
        href="product_info.php?id=3005" target="detail">

    </map>

    <img src="../image/beverages.png" id="beverages" alt="Beverages" usemap="#bev-map"
    style="position: absolute; top:288px; left:8px; visibility:hidden"
    onmouseover="beverages.style.visibility='visible'" onmouseout="beverages.style.visibility='hidden'">
    <map name="bev-map">
        <area name="4003" shape="rect" coords="29,308,108,356" onmouseover="beverages.style.visibility='visible'"
        href="product_info.php?id=4003" target="detail">
        <area name="4004" shape="rect" coords="117,309,196,357" onmouseover="beverages.style.visibility='visible'"
        href="product_info.php?id=4004" target="detail">
        <area name="4000" shape="rect" coords="205,309,284,357" onmouseover="beverages.style.visibility='visible'"
        href="product_info.php?id=4000" target="detail">
        <area name="4001" shape="rect" coords="293,308,372,356" onmouseover="beverages.style.visibility='visible'"
        href="product_info.php?id=4001" target="detail">
        <area name="4002" shape="rect" coords="379,307,458,355" onmouseover="beverages.style.visibility='visible'"
        href="product_info.php?id=4002" target="detail">
        <area name="4005" shape="rect" coords="497,172,599,222" onmouseover="beverages.style.visibility='visible'"
        href="product_info.php?id=4005" target="detail">

    </map>

    <img src="../image/home_health.png" id="home" alt="Home Health" usemap="#home-map"
    style="position: absolute; top:288px; left:8px; visibility:hidden"
    onmouseover="home.style.visibility='visible'" onmouseout="home.style.visibility='hidden'">
    <map name="home-map">
        <area name="2002" shape="rect" coords="11,163,113,211" onmouseover="home.style.visibility='visible'"
        href="product_info.php?id=2002" target="detail">
        <area name="2000" shape="rect" coords="79,313,181,361" onmouseover="home.style.visibility='visible'"
        href="product_info.php?id=2000" target="detail">
        <area name="2001" shape="rect" coords="198,312,300,360" onmouseover="home.style.visibility='visible'"
        href="product_info.php?id=2001" target="detail">
        <area name="2005" shape="rect" coords="249,164,351,212" onmouseover="home.style.visibility='visible'"
        href="product_info.php?id=2005" target="detail">
        <area name="2003" shape="rect" coords="322,311,424,359" onmouseover="home.style.visibility='visible'"
        href="product_info.php?id=2003" target="detail">
        <area name="2004" shape="rect" coords="442,312,544,360" onmouseover="home.style.visibility='visible'"
        href="product_info.php?id=2004" target="detail">
        <area name="2006" shape="rect" coords="490,164,592,212" onmouseover="home.style.visibility='visible'"
        href="product_info.php?id=2006" target="detail">

    </map>
    <img src="../image/pet_food.png" id="pet" alt="Pet Food" usemap="#pet-map"
    style="position: absolute; top:288px; left:13px; visibility:hidden"
    onmouseover="pet.style.visibility='visible'" onmouseout="pet.style.visibility='hidden'">
    <map name="pet-map">
        <area name="5002" shape="rect" coords="123,161,226,210" onmouseover="pet.style.visibility='visible'"
        href="product_info.php?id=5002" target="detail">
        <area name="5003" shape="rect" coords="244,162,347,211" onmouseover="pet.style.visibility='visible'"
        href="product_info.php?id=5003" target="detail">
        <area name="5000" shape="rect" coords="317,311,420,360" onmouseover="pet.style.visibility='visible'"
        href="product_info.php?id=5000" target="detail">
        <area name="5001" shape="rect" coords="433,310,536,359" onmouseover="pet.style.visibility='visible'"
        href="product_info.php?id=5001" target="detail">
        <area name="5004" shape="rect" coords="483,162,586,211" onmouseover="pet.style.visibility='visible'"
        href="product_info.php?id=5004" target="detail">
    </map>
</div>
<div id="info">
    <!-- display the product info window -->
    <iframe name="detail" src="product_info.php" frameborder=3 width="100%" height="100%"></iframe>
</div>
<div id="cart">
    <!-- display the shopping cart window -->
    <iframe name="shopping_list" src="shopping_cart.php" frameborder=3 width="100%" height="100%"></iframe>

</div>
</body>

</html>