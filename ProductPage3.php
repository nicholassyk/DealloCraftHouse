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
      <li><span class="converse">Sharp Microwave Oven</span></li>
      <li><a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
</a></li>
    </ul>
  </div>
  
  <div class="middle">
      <a href="Product9.php"><img src="image/product_3_1.jpg" alt="product 1" /></a>
  </div>
  
  <div class="bottom">
    <div class="heading">R202ZS Microwave Oven</div>
    <div class="info">Brand: Sharp</div>
    <div class="style">800W Low Power Consumption, 11 Power Levels</div>
    <div class="price">RM199.00 <span class="old-price">RM439.00</span></div>
  </div>
  
</div>
    
<div class="block">
  
  <div class="top">
    <ul>
      <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
      <li><span class="converse">Midea Washing Machine</span></li>
      <li><a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
</a></li>
    </ul>
  </div>
  
  <div class="middle">
      <a href="Product10.php"><img src="image/product_3_2.jpg" alt="product 2" /></a>
  </div>
  
  <div class="bottom">
    <div class="heading">Fully Automatic 7KG MFW-701S Washing Machine</div>
    <div class="info">Brand: Midea</div>
    <div class="style">Stainless Steel Drum, Metal Body and Tempered Glass Window</div>
    <div class="price">RM457.00 <span class="old-price">RM600.00</span></div>
  </div>
  
</div>
<div class="block">
  
  <div class="top">
    <ul>
      <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
      <li><span class="converse">Philips Steam Iron</span></li>
      <li><a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
</a></li>
    </ul>
  </div>
  
  <div class="middle">
      <a href="Product11.php"><img src="image/product_3_3.jpg" alt="product 3" /></a>
  </div>
  
  <div class="bottom">
    <div class="heading">GC1426 Steam Iron</div>
    <div class="info">Brand: Philips</div>
    <div class="style">1400W Power Consumption, Non-Stick Soleplate & 160ml Water Tank</div>
    <div class="price">RM64.99 <span class="old-price">RM89.00</span></div>
  </div>
  
</div>
<div class="block">
  
  <div class="top">
    <ul>
      <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
      <li><span class="converse">Midea Rice Cooker </span></li>
      <li><a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
</a></li>
    </ul>
  </div>
  
  <div class="middle">
    <a href="Product12.php"><img src="image/product_3_4.jpg" alt="product 4" /></a>
  </div>
  
  <div class="bottom">
    <div class="heading">MG-GP18B Rice Cooker (White)</div>
    <div class="info">Brand: Midea</div>
    <div class="style">1.8 Litre, Non-Stick Inner Pot & 700W Power</div>
    <div class="price">RM58.00 <span class="old-price">RM109.00</span></div>
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