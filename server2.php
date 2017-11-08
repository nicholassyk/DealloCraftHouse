<?php
	$con = mysqli_connect('localhost', 'root', '', 'product');
	$errors = array();
	
	if (isset($_POST['upload'])) {
		$title = $_POST['title'];
		$type = $_POST['type'];
		$name = $_POST['name'];
		$brand = $_POST['brand'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$comments = $_POST['comments'];
		$ratings = $_POST['ratings'];
	
		// Check form inputs & return errors
		if (empty($title)) {
			array_push($errors, "Title is required");
		}
		if (empty($type)) {
			array_push($errors, "Type is required");
		}
		if (empty($name)) {
			array_push($errors, "Name is required");
		}
		if (empty($brand)) {
			array_push($errors, "Brand is required");
		}
		if (empty($description)) {
			array_push($errors, "Description is required");
		}
		if (empty($price)) {
			array_push($errors, "Price is required");
		}
		
		// Save to database if no errors
		if (count($errors) == 0) {
			$sql = $con->query("INSERT INTO products (title, type, name, brand, description, price, comments, ratings) VALUES('{$title}', '{$type}', '{$name}', '{$brand}', '{$description}', '{$price}', '{$comments}', '{$ratings}')");
		}	
	}

    $sql1 = "SELECT * FROM products where type = 'type1'";
    $result1 = mysqli_query($con, $sql1);

    $sql2 = "SELECT * FROM products where type = 'type2'";
    $result2 = mysqli_query($con, $sql2);

    $sql3 = "SELECT * FROM products where type = 'type3'";
    $result3 = mysqli_query($con, $sql3);

    $sql4 = "SELECT * FROM products where type = 'type4'";
    $result4 = mysqli_query($con, $sql4);

?>