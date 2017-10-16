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
                    <a href="#">Clothing & Accessories</a>
                </div>
                <div class="col-md-3">
                    <a href="#">Craft Supplies</a>
                </div>
                <div class="col-md-3">
                    <a href="#">Home & Living</a>
                </div>
                <div class="col-md-3">
                    <a href="#">Kids & Babies</a>
                </div>
            </div>
    </div>
        <hr />
    
 <div class="block">
  
  <div class="top">
    <ul>
      <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
      <li><span class="converse">Clothing & Accessories</span></li>
      <li><a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
</a></li>
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
      <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
      <li><span class="converse">clothing & accessories</span></li>
      <li><a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
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
      <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
      <li><span class="converse">Clothing & Accessories</span></li>
      <li><a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
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
      <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
      <li><span class="converse">Craft Supplies</span></li>
      <li><a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
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