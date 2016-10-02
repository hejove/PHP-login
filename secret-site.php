<?php session_start();
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
<meta charset="UTF-8">
<title>Secret site</title>
</head>

<body>
<!--sessioner blliver brugt til at tjekke op på om der er logget ind eller ej, og hvilket id nummer der er logget ind-->
<?php 
	if(isset($_SESSION['uid'])) {
		echo '<br>secret infomation, uhh you are a lucky one<br>';
		echo '<br><a href="loguout.php">Logout</a>';
		
	} else {
		echo 'Failed, not logged in <br> <br>To see the secret information on the website, you must login first, if you dont have a login, then push the buttom create user '; 
		}
	?>


<br><br>
 <a href="login-site.php">Go back and login</a>




</body>
</html>





