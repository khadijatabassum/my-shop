<?php
include("includes/db.php");
include("functions/functions.php)";

?>
<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<title>My Shop</title>
<link rel="stylesheet" href="styles/style.css" media="all"/>
</head>
<body>
<!--Main Container Start-->
<div class="main_wrapper">
<!--header strat from here-->
<div class="header_wrapper">
<a href="indx.php"><img src="images/28.png" ></a>
<img src="images/23.jpg">
<img src="images/24.png">


</div>
<!--header Ends-->

<!--Navagation bar starts-->
<div id="navbar">

<ul id="menu">
<li><a href="index.php">Home </a></li>
<li><a href="all_products.php">All Products </a></li>
<li><a href="my_account.php">My Account </a></li>
<li><a href="user_register.php">Sign Up </a></li>
<li><a href="cart.php">Shopping Cart </a></li>
<li><a href="contact.php">Contact Us </a></li>


</ul>
<div id="form">
<form method="get" action="results.php" enctype="multipart/form-data">
<input type="text"  name="user_query" placeholder="Search a Product">
<input type="submit" name="search" value="Search">
</form>
</div>

</div>
<!--Navagation bar Ends-->


<div id="content_wrapper">

<div id="left_sidebar">

<div id="sidebar_title">Categories</div>

<ul id="cats">

<?php

getCats();
?>



</ul>

<div id="sidebar_title">Brands</div>

<ul id="cats">

<?php get_Brands();?>


</ul>







</div>
<div id="right_content">

<div id="headline">
<div id="headline_content">
<b>Welcome Guest!</b>
<b style="color:pink;"> Shopping Cart:</b>
<span>-Items: -Price:
</span>
</div>

</div>
<div id="products_box">
<?php 

getPro();
getCatPro();
getBrandPro();



?>


</div>

</div>

</div>
<div class="footer">

<h1 style="color:#000; padding-top:30px;text-align:center;">&copy; 2018 - By Khadija Tabassum</h1>

</div>
<!-- End Main Container Start-->
</body>
</html>
