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
            <li id="nav"><a href="index.php">Home</a></li>
            <li id="nav"><a href="ProductPage.php">Products</a></li>
            <li id="nav"><a href="Chat.php">Chat Forum</a></li>
            <li style="float:right" id="nav"><a href="Cart.php">Cart</a></li>
            <li class="dropdown" style="float:right">
                <a class="dropbtn">
				<?php
					if($result = $con->query("SELECT username FROM user WHERE id = 0")) {
					if($count = $result->num_rows) {
						while ($row = $result->fetch_object()){
							echo $row->username;
						}
					}
					}
				?>
				</a>
            </li>
        </ul>
		<hr>
		
		<div id="profilewrapper">
		
		<div class="profileimgwrapper">
			<img src="image/swift.jpg" alt="profileImg" class="profilepicture">
			
			<p id="profileimgname">
			<?php
				if($result = $con->query("SELECT firstname, lastname FROM user WHERE id = 0")) {
				if($count = $result->num_rows) {
					while ($row = $result->fetch_object()){
						echo $row->firstname, ' ', $row->lastname;
					}
				}
				}
			?>
		
			</p>
			
			<p><img src="image/5stars.svg" alt="5 Stars Rating" class="rating"></p>
			
		</div>
		
        <div id="profiledescriptionwrapper">
		<div class="profiledescription">
            <p id="profileusername">
			<?php
				if($result = $con->query("SELECT username FROM user WHERE id = 0")) {
				if($count = $result->num_rows) {
					while ($row = $result->fetch_object()){
						echo $row->username, '\'s Biography';
					}
				}
				}
			?>
			</p>
			
			<p id="profilebio">
			<?php
				if($result = $con->query("SELECT bio FROM user WHERE id = 0")) {
				if($count = $result->num_rows) {
					while ($row = $result->fetch_object()){
						echo $row->bio;
					}
				}
				}
			?>
			</p>
			
			<br>
			
            <p id="profileuseremail">
			Email:
			<?php
				if($result = $con->query("SELECT email FROM user WHERE id = 0")) {
				if($count = $result->num_rows) {
					while ($row = $result->fetch_object()){
						echo $row->email;
					}
				}
				}
			?>
			</p>
            <p id="profileuseraddress">
			Address:
			<?php
				if($result = $con->query("SELECT address FROM user WHERE id = 0")) {
				if($count = $result->num_rows) {
					while ($row = $result->fetch_object()){
						echo $row->address;
					}
				}
				}
			?>
			</p>
        </div>
		
		</div>
	</div>
	
	<div id="profilehistorywrapper">
		<p class="historytitle">Purchase History</p>
		
		<table id="profiletable">
			<tr>
				<th>Order #</th>
				<th>Placed On</th>
				<th>Amount</th>
				<th>Status</th>
			</tr>
			
			<tr>
				<td>1234567</td>
				<td>02/11/2017</td>
				<td>RM25.00</td>
				<td>Delivered</td>
			</tr>
			
			<tr>
				<td>7654321</td>
				<td>02/11/2017</td>
				<td>RM52.00</td>
				<td>Shipped</td>
			</tr>
		
		</table>
		
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