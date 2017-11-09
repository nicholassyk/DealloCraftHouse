<?php require 'server.php'; ?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>E-Market Portal System</title>
        <link rel="stylesheet" href="main.css">
        <meta name="SignUp" content="SignUp">
    </head>
    <body>
        <p><a href="index.php"><img src="logo.svg" id="homeimg" style="width:150px; height:60px; vertical-align-center"></a></p><br>
        <form id="registration" method="post" action="Signup.php">
            <h1>Create Account</h1>
			First Name: <br>
            <input type="text" name="fname" value="<?php if (isset($_POST["fname"])) echo $_POST["fname"]; ?>"><br><br>
			Last Name: <br>
            <input type="text" name="lname" value="<?php if (isset($_POST["lname"])) echo $_POST["lname"]; ?>"><br><br>
            Username: <br>
            <input type="text" name="name" value="<?php if (isset($_POST["name"])) echo $_POST["name"]; ?>"><br><br>
            Email: <br>
            <input type="email" name="email" value="<?php if (isset($_POST["email"])) echo $_POST["email"]; ?>"><br><br>
            Password: <br>
            <input type="password" name="password"><br><br>
            Re-enter password: <br>
            <input type="password" name="repassword"><br>
			<?php require 'errors.php'; ?><br>
            <input type="submit" name="register" value="Create your account!">
            <p>By creating an account, you agree to Deallo's Condition of Use and Privacy Notice.</p><br>
            <p>Already have an account? <a href="Login.php">Sign In</a></p>
        </form>

    </body>
</html>