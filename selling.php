<?php require 'server2.php'; session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Template that uses Bootstrap</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
   <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/Product1.css" rel="stylesheet" />
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
            <select name="type">
                <option value="0" selected>Please select a type</option>
                
                <option value="type1">Clothing & Accessories</option>
                
                <option value="type2">Home & Living</option>
                
                <option value="type3">Electronics</option>
                
                <option value="type4">Kids & Babies</option>
            </select>    
            <br><br>
        
            Name: <br>
            <input type="text" name="name" value="<?php if (isset($_POST["name"])) echo $_POST["name"]; ?>"><br><br>
        
            Brand: <br>
            <input type="text" name="brand" value="<?php if (isset($_POST["brand"])) echo $_POST["brand"]; ?>"><br><br>
            
            Description: <br>
            <textarea name="description" rows="6" value="<?php if (isset($_POST["description"])) echo $_POST["description"]; ?>" placeholder="Briefly explain your product"></textarea><br><br>
        
            Price (RM): <br>
            <input type="text" name="price" value="<?php if (isset($_POST["price"])) echo $_POST["price"]; ?>"><br><br>
        
            Comments: <br>
            <textarea name="comments" rows="6" value="<?php if (isset($_POST["comments"])) echo $_POST["comments"]; ?>" placeholder="Explain more on your product's details"></textarea><br><br>
        
            Ratings: <br>
            <input type="number" name="ratings" min="1" max="5" value="<?php if (isset($_POST["ratings"])) echo $_POST["ratings"]; ?>"><br><br>
        
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