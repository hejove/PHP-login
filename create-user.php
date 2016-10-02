<?php session_start();
require_once("dbcon.php"); ?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
<meta charset="UTF-8">
<title>Create User</title>
</head>


<body>

	<h1> Create new user</h1>
<form method="post" action="submit.php"> <!--action link til siden med forbindelsen til databasen-->
  <p>Username:</p>
  <input type="text" name="username" placeholder="username" required/>
  <br>
  <p>Password:</p>
  <input type="text" name="password" placeholder="password" required/>
  <br>
  <p>Email:</p>
  <input type="email" name="email" placeholder="email" required/>
  <br>
  <input type="submit" value="Create new user" name="newUser"/>
  
  
</form>
Register
	<span>or <a href="login-site.php">login here</a></span>


<script>
    // Validering af emailen "
	function validateEmail() {
    //Regular expression der checker for "lovlige" karakterer og deres rækkefølge.
    var mailformat = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/; 
    // Find værdien af elementet med id "email" og check det op imod variablen "mailformat".
    if(document.getElementById("email").value.match(mailformat)) {
    return true;}
    // Hvis brugeren har tastet forkert, så får brugeren en besked:
    else {
    alert("Der var en fejl i din e-mail. Prøv igen!");}
}
</script>

</body>
</html>