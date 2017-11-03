<?php require 'server2.php'; session_start(); ?>
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
    
    <br>
    
    <form id="upload" method="post" action="selling.php">
            <h1>Upload a Product</h1>
            Title: <br>
            <input type="text" name="title" value="<?php if (isset($_POST["title"])) echo $_POST["title"]; ?>"><br><br>
            Type: <br>
            <input type="text" name="type" value="<?php if (isset($_POST["type"])) echo $_POST["type"]; ?>"><br><br>
            Name: <br>
            <input type="text" name="name" value="<?php if (isset($_POST["name"])) echo $_POST["name"]; ?>"><br><br>
            Brand: <br>
            <input type="text" name="brand" value="<?php if (isset($_POST["brand"])) echo $_POST["brand"]; ?>"><br><br>
            Description: <br>
            <input type="text" name="description" value="<?php if (isset($_POST["description"])) echo $_POST["description"]; ?>"><br><br>
            Price: <br>
            <input type="text" name="priceold" value="<?php if (isset($_POST["priceold"])) echo $_POST["priceold"]; ?>"><br><br>
            Discounted price (if any): <br>
            <input type="text" name="pricenew" value="<?php if (isset($_POST["pricenew"])) echo $_POST["pricenew"]; ?>"><br><br>
            Comments: <br>
            <input type="text" name="comments" value="<?php if (isset($_POST["comments"])) echo $_POST["comments"]; ?>"><br><br>
            Ratings: <br>
            <input type="text" name="ratings" value="<?php if (isset($_POST["ratings"])) echo $_POST["ratings"]; ?>"><br><br>
			<?php require 'errors.php'; ?><br>
            <input type="submit" name="upload" value="Upload this item!">
        </form>
    
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