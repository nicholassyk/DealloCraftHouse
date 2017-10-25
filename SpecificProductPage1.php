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
    <link href="Product1.css" rel="stylesheet" />
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
    
 <div class="block1">
  
  <div class="top">
    <ul>
      <li><span class="converse">Long Sleeve Blouse</span></li>
</a></li>
    </ul>
  </div>
  
  <div class="bottom">
    <img src="image/product_1_1.jpg" alt="product 1" />
    <div class="heading">Women Oversized Casual Top</div>
    <div class="info">Brand: Zanzea</div>
    <div class="style">Rayon Cotton, No Pockets</div>
    <div class="price">RM34.90 <span class="old-price">RM79.80</span></div>
  </div>
  
</div>

<div class="block2">
  
  <div class="top">
    <ul>
      <li><span class="converse">What's in the box:</span></li>
</a></li>
    </ul>
  </div>
  
  <div class="bottom">
      <table>
        <tr>
            <th>General Features</th> 
            <th>Description</th>
        </tr>
        <tr>
            <td>Model</td>
            <td>ZANZEA-POA1260867</td>
        </tr>
        <tr>
            <td>Clothing Material</td>
            <td>Cotton</td>
        </tr>
        <tr>
            <td>Style</td>
            <td>Casual</td>
        </tr>
        <tr>
            <td>Pattern</td>
            <td>Plaid</td>
        </tr>
        <tr>
            <td>Sleeves</td>
            <td>Long Sleeve</td>
        </tr>
        <tr>
            <td>Collar Type</td>
            <td>Turn-down</td>
        </tr>
        <tr>
            <td>Blouse Sleeve Style</td>
            <td>Cuff Sleeve</td>
        </tr>
        <tr>
            <td>Weight</td>
            <td>0.33</td>
        </tr>
      </table>
      <button class="button">Add to cart!</button>
  </div>
  
</div>

    <hr />

     <footer>
		<hr>
            <p>Deallo Craft House Ltd. <button onclick="Subscribe()" id="subscibe" style="float:right">Subscribe To Us!</button></p>
        <script src="main.js"></script>
    </footer>
   
    <!-- jQuery - required for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <!-- All Bootstrap plug-ins file -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>