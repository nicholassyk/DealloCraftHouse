<?php require 'server.php'; session_start(); ?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>E-Market Portal System</title>
        <link rel="stylesheet" href="main.css">
        <meta name="Profile" content="Profile">
    </head>
    <body>
        <ul id="navbar">
            <li id="nav"><img src="logo.svg"></li>
            <li id="nav"><a href="Home.html">Home</a></li>
            <li id="nav"><a href="Product.html">Products</a></li>
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
		<hr>
            <img src="image/index.jpg" alt="profileImg" class="profilePic">

        
        <div class="profileDesc">
            
            <p id="userName"><?php 
				if (isset($_SESSION['username'])){
					echo 'Welcome, ', $_SESSION['username'];
				}
				?></p>
            <P id="userDesc"><b>Email:</b> 100067364@students.swinburne.edu.my</P>
            <p id="userNews"><b>NewsLetter:</b> On</p>
            <p id="userAddress"><b>Address:</b> No78 Sand Garden 5A Street, 94700 Serian, Kuching, Sarawak</p>
        </div>
            <a href="facebook.com" class="textImg">Edit</a>

      <br>
      <br>
      <br>
      <br>

        <table width="45%" id="table" align="center">
          <tr>
            <th>Order#</th>
            <th>Placed On</th> 
            <th>Total</th>
              <th>Status</th>
          </tr>
          <tr>
            <td>152035</td>
            <td>10/10/2017</td> 
            <td>RM 10.92</td>
            <td>Done</td>
          </tr>
          <tr>
            <td>335737</td>
            <td>10/10/2017</td> 
            <td>RM 30.10</td>
            <td>Done</td>
          </tr>
        </table>
        <br>
        
    
    <footer>
		<hr>
        <div id="content">
            <p>Deallo Craft House Ltd. <button onclick="Subscribe()" id="subscibe" style="float:right">Subscribe To Us!</button></p>
        </div>
        <script src="main.js"></script>
    </footer>
	</body>
</html>