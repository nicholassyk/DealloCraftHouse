<?php require 'server.php'; session_start(); ?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>E-Market Portal System</title>
        <link rel="stylesheet" href="main.css">
        <meta name="Homepage" content="Homepage">
    </head>
    <body>
        <ul id="navbar">
            <li id="nav"><img src="logo.svg"></li>
            <li id="nav"><a href="index.php">Home</a></li>
            <li id="nav"><a href="ProductPage.php">Products</a></li>
            <li id="nav"><a href="Chat.php">Chat Forum</a></li>
            <li style="float:right" id="nav"><a href="Cart.html">Cart</a></li>
            <li class="dropdown" style="float:right">
                <a class="dropbtn">
				<?php 
				if (isset($_SESSION['username'])){
					echo 'Welcome, ', $_SESSION['username'];
				}
				?>
				</a>
                    <div class="dropdown-content">
                          <a href="Login.php" <?php session_destroy(); ?>>Logout</a>
                    </div>
            </li>

        </ul>
		
		
		<p><img src="image/homebanner.png" alt="Banner" id="homebanner"></p>
		
		<div id="homespecialties">
			<div class="specialties">
				<p><img src="image/tick.svg" alt="Tick" class="tick">Unique Items</p>
				<p><span class="specialtiestext">There are millions of uniquely handcrafted items where you can get items that are one-of-a-kind</span></p>
			</div>
			
			<div class="specialties">
				<p><img src="image/tick.svg" alt="Tick" class="tick">Passionate Sellers</p>
				<p><span class="specialtiestext">All handcrafted items are made by someone who put their heart and soul into making them special</span></p>
			</div>
			
			<div class="specialties">
				<p><img src="image/tick.svg" alt="Tick" class="tick">Shop With Confidence</p>
				<p><span class="specialtiestext">We embedded state-of-the-art technology to help protect your personal data and transactions</span></p>
			</div>
		</div>
		
        <div id="editor">
        </div>
		
		<div id="topcrafter">
		<br><br>
			<h2>Crafter of the Month</h2>
			
			<div class="crafter">
				<p><img src="image/swift.jpg" alt="Swift" class="crafterimg"></p>
				<p>Taylor Swift</p>
				<p><img src="image/5stars.svg" alt="5 Stars Rating" class="rating"></p>
				<p>"Passionate and friendly seller"</p>
				<p>"Items delivered faster than expected"</p>
				<p>"100% recommended"</p>
			</div>
			
			<div class="crafter">
				<p><img src="image/emma.jpg" alt="Emma" class="crafterimg"></p>
				<p>Emma Watson</p>
				<p><img src="image/5stars.svg" alt="5 Stars Rating" class="rating"></p>
				<p>"Creative crafter"</p>
				<p>"Excellent quality crafts"</p>
				<p>"Editor's favourite"</p>
			</div>
			
			<div class="crafter">
				<p><img src="image/chrissy.jpg" alt="Chrissy" class="crafterimg"></p>
				<p>Chrissy Costanza</p>
				<p><img src="image/5stars.svg" alt="5 Stars Rating" class="rating"></p>
				<p>"Instant response"</p>
				<p>"Fast delivery"</p>
				<p>"Low price excellent quality"</p>
			</div>
		</div>
		
	
   
	<div id="securepurchase">
		<h1>Secure Shopping</h1>
		
		<div class="security">
		<h3>SSL Encryption</h3>
		<p>Your purchase is encrypted with Secure Sockets Layer to provide added data protection</p>
		</div>
		
		<div class="security">
		<h3>Trusted Seller</h3>
		<p>We team up with only the most trusted seller to provide you with shopping confidence</p>
		</div>
		
		<div class="security">
		<h3>24/7 Support</h3>
		<p>Our team are online 24 hours a day, 7 days a week to assist you no matter where you are</p>
		</div>
	</div>
   
	
    <footer>
		<hr>
        <div id="content">
            <p>Deallo Craft House Ltd. <button onclick="Subscribe()" id="subscibe" style="float:right">Subscribe To Us!</button></p>
        </div>
        <script src="main.js"></script>
    </footer>
	
	</body>
</html>