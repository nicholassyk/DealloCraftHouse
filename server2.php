<?php
	$con = mysqli_connect('localhost', 'root', '', 'product');
	$errors = array();
	
	if (isset($_POST['upload'])) {
		$title = $_POST['title'];
		$type = $_POST['type'];
		$name = $_POST['name'];
		$brand = $_POST['brand'];
		$description = $_POST['description'];
		$pricenew = $_POST['pricenew'];
		$priceold = $_POST['priceold'];
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
		if (empty($priceold)) {
			array_push($errors, "Price is required");
		}
		
		// Save to database if no errors
		if (count($errors) == 0) {
			$sql = $con->query("INSERT INTO products (title, type, name, brand, description, pricenew, priceold, comments, ratings) VALUES('{$title}', '{$type}', '{$name}', '{$brand}', '{$description}', '{$pricenew}', '{$priceold}', '{$comments}', '{$ratings}')");
		}	
	}
?>