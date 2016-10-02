<?php
session_start(); 
?>
<!doctype html>
<html>



<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
<meta charset="UTF-8">
<title>Login</title>
</head>

<body>



<h1>Login here</h1>
<a href="secret-site.php">Go to website</a>
<form method="post" action="login-check.php">
  <p>Username:</p><br>
  <input type="text" name="username" placeholder="username" required/>
  <br>
  <p>Password:</p><br>
  <input type="text" name="password" placeholder="password" required/>
  <br>
 
  
 <input type="submit" value="Sign in"/>
  <br><br>
  
  New user? <a href="create-user.php">Create user</a>
  
  
</form>







</body>
</html>



