<?php require 'server.php'; session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Template that uses Bootstrap</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
   <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML 5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
     <script src="js/html5shiv.js"></script>
     <script src="js/respond.min.js"></script>
    <![endid]-->
    <link href="Product.css" rel="stylesheet" />
</head>

<body>
    
  
        <ul id="navbar">
            <li id="nav"><img src="logo.svg"></li>
            <li id="nav"><a href="index.php">Home</a></li>
            <li id="nav"><a href="ProductPage.php">Products</a></li>
            <li id="nav"><a href="Chat.html">Chat Forum</a></li>
            <li style="float:right" id="nav"><a href="Cart.html">Cart</a></li>
            <li class="dropdown" style="float:right">
                <a class="dropbtn">Sign In</a>
                    <div class="dropdown-content">
                          <a href="Login.php">Sign In</a>
                          <a href="Signup.php">Sign Up</a>
                    </div>
            </li>
        </ul>
        <hr />
        <hr />
        <hr>
    <div class="container">
            <div class="row" id="navi">
                <div class="col-md-3">
                    <a href="ProductPage1.php">Clothing & Accessories</a>
                </div>
                <div class="col-md-3">
                    <a href="ProductPage2.php">Home & Living</a>
                </div>
                <div class="col-md-3">
                    <a href="ProductPage3.php">Electronics</a>
                </div>
                <div class="col-md-3">
                    <a href="ProductPage4.php">Kids & Babies</a>
                </div>
            </div>
    </div>
        <hr />
    
 <div class="block">
  
  <div class="top">
    <ul>
      <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
      <li><span class="converse">Pediasure Milk Powder</span></li>
      <li><a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
</a></li>
    </ul>
  </div>
  
  <div class="middle">
      <a href="Product13.php"><img src="image/product_4_1.jpg" alt="product 1" /></a>
  </div>
  
  <div class="bottom">
    <div class="heading">Complete Nutrition Milk Powder</div>
    <div class="info">Brand: Pediasure</div>
    <div class="style">1.6KG, Vanila Flavoured & For 1 to 10 Years Old</div>
    <div class="price">RM139.80</div>
  </div>
  
</div>
    
<div class="block">
  
  <div class="top">
    <ul>
      <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
      <li><span class="converse">Boy Outfit Set</span></li>
      <li><a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
</a></li>
    </ul>
  </div>
  
  <div class="middle">
      <a href="Product14.php"><img src="image/product_4_2.jpg" alt="product 2" /></a>
  </div>
  
  <div class="bottom">
    <div class="heading">Toddler T-Shirt + Short Pants Outfit Set</div>
    <div class="info">Brand: OEM</div>
    <div class="style">Comes in Green, 100% Brand New & 2017 New Style</div>
    <div class="price">RM21.21 <span class="old-price">RM26.21</span></div>
  </div>
  
</div>
<div class="block">
  
  <div class="top">
    <ul>
      <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
      <li><span class="converse">Kids Play House</span></li>
      <li><a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
</a></li>
    </ul>
  </div>
  
  <div class="middle">
      <a href="Product15.php"><img src="image/product_4_3.jpg" alt="product 3" /></a>
  </div>
  
  <div class="bottom">
    <div class="heading">Fun Park Kids Play House</div>
    <div class="info">Brand: Haenim</div>
    <div class="style">High Quality Plastics Made, Easily Assembled</div>
    <div class="price">RM1288.00 <span class="old-price">RM1688.00</span></div>
  </div>
  
</div>
<div class="block">
  
  <div class="top">
    <ul>
      <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
      <li><span class="converse">Milk Bottle (Twin Pack)</span></li>
      <li><a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
</a></li>
    </ul>
  </div>
  
  <div class="middle">
    <a href="Product16.php"><img src="image/product_4_4.jpg" alt="product 4" /></a>
  </div>
  
  <div class="bottom">
    <div class="heading">Natural Blue Bottle 9oz / 260ml x 2</div>
    <div class="info">Brand: Phillips Avent</div>
    <div class="style">BPA Free, Simple to Use and Clean & Easily Assembled</div>
    <div class="price">RM56.00 <span class="old-price">RM128.90</span></div>
  </div>
  
</div>
    <hr />

     <footer>
		<hr>
        <div id="content">
            <p>Deallo Craft House Ltd. <button onclick="Subscribe()" id="subscibe" style="float:right">Subscribe To Us!</button></p>
        </div>
        <script src="main.js"></script>
    </footer>
   
    <!-- jQuery - required for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <!-- All Bootstrap plug-ins file -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>