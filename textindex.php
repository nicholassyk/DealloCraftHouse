<?php
require 'connect.php';
$result = mysqli_query($con, 'select * from products');
?>
<table cellpadding="2" cellspacing="2" border="0">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Buy</th>
    </tr>
    <?php while($product = mysqli_fetch_object($result)) { ?>
    <tr>
        <td><?php echo $product->productID; ?></td>
        <td><?php echo $product->name; ?></td>
        <td><?php echo $product->price; ?></td>
        <td><a href="Cart.php?id=<?php echo $product->productID; ?>">Order Now</a></td>
    </tr>
    <?php } ?>
</table>