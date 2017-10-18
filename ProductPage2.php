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
    <link href="css/Product.css" rel="stylesheet" />
</head>

<body>
    
    <div class="banner1">
        
        <div class="row" id="banner" >
            <div class="col-md-6">
              <h2>Deallo Craft House Ltd.</h2>
            </div>
            
            <div class="col-md-2" id="texttop">
                <a href="#">Sell</a>
            </div>
            
            <div class="col-md-2" id="texttop">
                <a href="#">Sign In</a>
            </div>
            
            <div class="col-md-2" id="basketbox">
                <a href="#" class="btn btn-info btn-lg">
                <span class="glyphicon glyphicon-shopping-cart"></span>My Basket</a>
            </div>  
         </div>
        
    </div>
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
      <li><span class="converse">Knife Set</span></li>
      <li><a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
</a></li>
    </ul>
  </div>
  
  <div class="middle">
      <a href="Product5.php"><img src="image/product_2_1.jpg" alt="product 1" /></a>
  </div>
  
  <div class="bottom">
    <div class="heading">Stainless Steel Knives with Chopping Board</div>
    <div class="info">Brand: OEM</div>
    <div class="style">Rust Proof, 7 Pieces Set</div>
    <div class="price">RM16.90 <span class="old-price">RM88.00</span></div>
  </div>
  
</div>
    
<div class="block">
  
  <div class="top">
    <ul>
      <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
      <li><span class="converse">Sitr Frying Wok Pan</span></li>
      <li><a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
</a></li>
    </ul>
  </div>
  
  <div class="middle">
      <a href="Product6.php"><img src="image/product_2_2.jpg" alt="product 2" /></a>
  </div>
  
  <div class="bottom">
    <div class="heading">Non-Stick Stir Fry Cooking Wok Pan</div>
    <div class="info">Brand: NaVa</div>
    <div class="style">Three Layers Steel, Magnetized Bottom</div>
    <div class="price">RM38.10 <span class="old-price">RM79.00</span></div>
  </div>
  
</div>
<div class="block">
  
  <div class="top">
    <ul>
      <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
      <li><span class="converse">Bean Bag</span></li>
      <li><a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
</a></li>
    </ul>
  </div>
  
  <div class="middle">
      <a href="Product7.php"><img src="image/product_2_3.jpg" alt="product 3" /></a>
  </div>
  
  <div class="bottom">
    <div class="heading">Maroon 2KG Bean Bag</div>
    <div class="info">Brand: LZD</div>
    <div class="style">Double Zipper, Black Bottom and Non-removal Cover</div>
    <div class="price">RM64.90 <span class="old-price">RM259.00</span></div>
  </div>
  
</div>
<div class="block">
  
  <div class="top">
    <ul>
      <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
      <li><span class="converse">Shoes Rack</span></li>
      <li><a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
</a></li>
    </ul>
  </div>
  
  <div class="middle">
        <a href="Product8.php"><img src="image/product_2_4.jpg" alt="product 4" /></a>
  </div>
  
  <div class="bottom">
    <div class="heading">4 Layers Stainless Steel Shoes Rack</div>
    <div class="info">Brand: OEM</div>
    <div class="style">Stainless Steel Tube, Sturdy & Lightweight</div>
    <div class="price">RM14.50 <span class="old-price">RM28.80</span></div>
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