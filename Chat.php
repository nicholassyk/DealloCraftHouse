<?php
date_default_timezone_set('Asia/Kuching');
$connect = mysqli_connect('localhost', 'root', '', 'message');
if(mysqli_connect_errno())
	{
		die("Database connection failed: " .
			mysqli_connect_error() .
			" (" . mysqli_connect_errno(). ")"
			);
	}
$_SESSION['posted'] = false;
if(isset($_POST['submit'])){
	$time = date("g:i:s A");
	$name = $_POST['fname'];
	$msg = $_POST['message'];
	$result = "";
	if(!empty($msg) && !empty($name)){
		$query = "INSERT INTO message (";
		$query .= " name, messages, time";
		$query .= ") VALUES (";
		$query .= " '{$name}','{$msg}','{$time}'";
		$query .= ")";
		$result = mysqli_query($connect, $query);
	}
}
?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>E-Market Portal System</title>
        <link rel="stylesheet" href="main.css">
		<link rel="stylesheet" href="chat.css">
        <meta name="Chat" content="Chat">
    </head>
    <body>
        <ul id="navbar">
            <li id="nav"><img src="logo.svg"></li>
            <li id="nav"><a id="navlinks" href="index.php">Home</a></li>
            <li id="nav"><a id="navlinks" href="ProductPage1.php">Products</a></li>
			<li id="nav"><a href="selling.php">Sell Products</a></li>
            <li id="nav"><a href="Chat.php">Chat Forum</a></li>
            <li style="float:right" id="nav"><a id="navlinks" href="Cart.php">Cart</a></li>
            <li class="dropdown" style="float:right">
                <a class="dropbtn">Sign In</a>
                    <div class="dropdown-content">
                          <a id="navlinks" href="Login.php">Sign In</a>
                          <a id="navlinks" href="Signup.php">Sign Up</a>
                    </div>
            </li>
        </ul>
		<hr>
		
        <div id="content">
			<div id="thread" style="width:800px; margin:0 auto;">
				<?php
					$select = "SELECT * FROM message";
					$q = mysqli_query($connect, $select);
					while($row = mysqli_fetch_array($q, MYSQLI_ASSOC)){
						echo $row['name']. ": ". $row['messages']. "  [".$row['time']."]"."<br>";
					}
				?>
			</div>
            <form method="POST" action="Chat.php" style="margin-top:20px;">
				<label for= "fname">Name:</label>
				<input type="text" name = "fname" id="fname"><br>
				<label for= "message">Message:</label>
					<input type="text" name="message" id="message" rows = "4" cols="35"><br>
					<button type="submit" name="submit" style="margin-top:10px;">Submit</button>
			</form>
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