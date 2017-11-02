<?php
    $con = mysqli_connect('localhost', 'root', '', 'cart');
 ?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>E-Market Portal System</title>
        <link rel="stylesheet" href="main.css">
        <meta name="Cart" content="Cart">
    </head>
    <body>
        <ul id="navbar">
            <li id="nav"><img src="logo.svg"></li>
            <li id="nav"><a id="navlinks" href="index.php">Home</a></li>
            <li id="nav"><a id="navlinks" href="ProductPage.php">Products</a></li>
            <li id="nav"><a href="Chat.php">Chat Forum</a></li>
            <li style="float:right" id="nav"><a id="navlinks" href="Cart.html">Cart</a></li>
            <li class="dropdown" style="float:right">
                <a class="dropbtn">Sign In</a>
                    <div class="dropdown-content">
                          <a id="navlinks" href="Login.php">Login</a>
                          <a id="navlinks" href="Signup.php">Sign Up</a>
                    </div>
            </li>
        </ul>
		<hr>
		
        <div id="content">
            <h2>Item summary: </h2>
            <table border="1">
                <tr>
                <th>Item ID</th>
                <th>Item Name</th>
                <th>Price</th>
                </tr>
                
                <tr>
                <td><?php 
				$result="SELECT productid FROM cart";
                $q = mysqli_query($con, $result);
                $row = mysqli_fetch_array($q, MYSQLI_ASSOC);
                    echo $row['productid'];
                    
            
				?></td>
                <td>Product A</td>
                <td>21.30</td>
                </tr>
                
                <tr>
                <td>A0002</td>
                <td>Product B</td>
                <td>31.30</td>
                </tr>
                
                 <tr>
                <td>A0003</td>
                <td>Product C</td>
                <td>25</td>
                </tr>
            </table>
            
            <h1>Total: </h1>
            <button><a href="Payment.html">Proceed to Checkout</a></button>
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