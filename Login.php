<?php require 'server.php'; ?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>E-Market Portal System</title>
        <link rel="stylesheet" href="main.css">
        <meta name="Login" content="Login">
    </head>
    <body>
        <p><a href="Home.html"><img src="logo.svg" id="homeimg" style="width:150px; height:60px; vertical-align-center"></a></p><br>
        <form method="post" action="Login.php">
            <h1>Sign In</h1>
            Username<br>
            <input type="text" name="name" value="<?php if (isset($_POST["name"])) echo $_POST["name"]; ?>"><br><br>
            Password:<br>
            <input type="password" name="password"><br>
			<?php require 'errors.php'; ?><br>
            <input type="submit" name="login" value="Sign In"><br><br>
            <p>New to Deallo? <a href="Signup.php">Sign Up</a></p>      
        </form>
    </body>
</html>