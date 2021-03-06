<?php
	$con = mysqli_connect('localhost', 'root', '', 'users');
	$errors = array();
	
	if (isset($_POST['register'])) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$username = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
	
		// Check form inputs & return errors
		if (empty($fname)) {
			array_push($errors, "First name is required");
		}
		if (empty($lname)) {
			array_push($errors, "Last name is required");
		}
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($email)) {
			array_push($errors, "Email is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}
		if ($password != $repassword) {
			array_push($errors, "Password do not match");
		}
		
		// Save to database if no errors
		if (count($errors) == 0) {
			$str = 'empty.jpg';
			$sql = $con->query("INSERT INTO user (firstname, lastname, username, email, password, img) VALUES('{$fname}', '{$lname}', '{$username}', '{$email}', '{$password}', '{$str}')");
			header('Location: Login.php');
		}	
	}
	
	if (isset($_POST['login'])) {
		$username = $_POST['name'];
		$password = $_POST['password'];
		
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}
		else {
			$username = $_POST['name'];
			$password = $_POST['password'];
			
			$result = $con->query("select * from user where username='$username' AND password='$password'");
			$rows = mysqli_num_rows($result);
			if ($rows == 0)
				array_push($errors, "Invalid Username or Password");
		}
		
		if (count($errors) == 0) {
			$username = $_POST['name'];
			$password = $_POST['password'];
			
			session_start();
			$_SESSION['username'] = $username;
			
			header('Location: index.php');
		}
	}
?>