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
      <li><span class="converse">Clothing & Accessories</span></li>
    </ul>
  </div>
  
  <div class="middle">
    <img src="index.jpg" alt="pic" />
  </div>
  
  <div class="bottom">
    <div class="heading">Comrade Doge</div>
    <div class="info">Woof name</div>
    <div class="style">Color: Green / Size: Woof-sized</div>
    <div class="price">$50.00 <span class="old-price">$75.00</span></div>
  </div>
  
</div>
    
<div class="block">
  
  <div class="top">
    <ul>
      <li><span class="converse">clothing & accessories</span></li>
</a></li>
    </ul>
  </div>
  
  <div class="middle">
    <img src="index.jpg" alt="pic" />
  </div>
  
  <div class="bottom">
    <div class="heading">Comrade Doge</div>
    <div class="info">Woofer name</div>
    <div class="style">Color: Black / Size: Woof-sized</div>
    <div class="price">$35.00 <span class="old-price">$45.00</span></div>
  </div>
  
</div>
<div class="block">
  
  <div class="top">
    <ul>
      <li><span class="converse">Clothing & Accessories</span></li>
</a></li>
    </ul>
  </div>
  
  <div class="middle">
    <img src="index.jpg" alt="pic" />
  </div>
  
  <div class="bottom">
    <div class="heading">Comrade Doge</div>
    <div class="info">Woof Woof</div>
    <div class="style">Color: Yellow / Size: Woofing</div>
    <div class="price">$50.00</div>
  </div>
  
</div>
<div class="block">
  
  <div class="top">
    <ul>
      <li><span class="converse">Craft Supplies</span></li>
</a></li>
    </ul>
  </div>
  
  <div class="middle">
    <img src="index.jpg" />
  </div>
  
  <div class="bottom">
    <div class="heading">Comrade Doge</div>
    <div class="info">Name of Woof</div>
    <div class="style">Color: Navy/White / Size: Size of a woofC</div>
    <div class="price">$34.00 <span class="old-price">$50.00</span></div>
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