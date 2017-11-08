<?php
session_start();
require 'connect.php';
require 'item.php';
$result = mysqli_query($con, 'SELECT * from products where id = '.$_GET['productID']);
$product = mysqli_fetch_object($result);
if(isset[$_GET['productID']]) {
    $item = new Item();
    $item->productID = $product->productID;
    $item->name = $product->name;
    $item->price = $product->price;
    $item->quantity = 1;
    // Check product is existing in cart
    $index = -1;
    $cart = unserialize(serialize($_SESSION['cart']));
    for($i=0; $i<count($cart); $i++)
        if($cart[$i]->id==$_GET['productID'])
        {
            $index =$i;
            break;
        }
    if($index==-1)
    $_SESSION['cart'][] = $item;
    else {
        $cart[$index]->quantity++;
        $_SESSION['cart'] = $cart;
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
            <table cellpadding="2" cellspacing="2" border="1">
                <tr>
                <th>Item ID</th>
                <th>Item Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Sub Total</th>
                </tr>
                <?php
                    $cart = unserialize(serialize($_SESSION['cart']));
                    for($i=0; $i<count($cart); $i++) {
                ?>
                <tr>
                    <td><?php echo $cart[$i]->productID; ?></td>
                    <td><?php echo $cart[$i]->name; ?></td>
                    <td><?php echo $cart[$i]->price; ?></td>
                    <td><?php echo $cart[$i]->quantity; ?></td>
                    <td><?php echo $cart[$i]->price * $cart[$i]->quantity; ?></td>
                </tr>
                
                <?php } ?>
                <tr>
                    <td colspan="4" align="right">Sum</td>
                    <td align="left"></td>
                </tr>
            </table>
            
            <h1></h1>
            <button><a href="SpecificProductPage1.php">Continue Shopping</a></button>
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