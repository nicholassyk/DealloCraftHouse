<?php require 'server2.php'; session_start(); $subjectID = $_GET['id']; 
    $stmt = $con->prepare("SELECT * FROM products where productid = ?");
    $stmt->bind_param("i", $subjectID);
    $stmt->execute();
    $result = $stmt->get_result();
    $row=$result->fetch_assoc(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Template that uses Bootstrap</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstra p -->
   <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML 5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
     <script src="js/html5shiv.js"></script>
     <script src="js/respond.min.js"></script>
    <![endid]-->
    <link href="css/Product1.css" rel="stylesheet" />
</head>

<body>
    
        <ul id="navbar">
            <li id="nav"><img src="logo.svg"></li>
            <li id="nav"><a href="index.php">Home</a></li>
            <li id="nav"><a href="ProductPage.php">Products</a></li>
            <li id="nav"><a href="Chat.php">Chat Forum</a></li>
            <li style="float:right" id="nav"><a href="Cart.php">Cart</a></li>
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
 <div class="block1">
  
  <div class="top">
      <span class="converse">
            <?php echo $row['title']; ?>
      </span>
  </div>
  
  <div class="bottom">
    <img src="image/product_1_1.jpg" alt="product 1" />
    <div class="heading"><?php echo $row['name']; ?></div>
    <div class="heading"><?php echo $row['type']; ?></div>
    <div class="info"><?php echo $row['brand']; ?></div>
    <div class="style"><?php echo $row['description']; ?></div>
    <div class="price"><?php echo $row['price']; ?></div>
  </div>
  
</div>

<div class="block2">
  
  <div class="top">
      <span class="converse">What's in the box:</span>
  </div>
  
  <div class="bottom">
      <table>
        <tr>
            <th><?php echo $row['comments']; ?></th>
        </tr>
        <tr>
            <td>Model</td>
            <td>ZANZEA-POA1260867</td>
        </tr>
      </table>
      <button class="button">Add to cart!</button>
  </div>
  
</div>

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