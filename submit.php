<?php  session_start();

include('dbcon.php');
/*username, password og email bliver "created" og lagt på i databasen*/
$username = filter_input(INPUT_POST, 'username') or die('Wrong');

$password = filter_input(INPUT_POST, 'password') or die('password missing');

$email 	= 	filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) or die('something went wrong');

echo $username.'<br>';
echo $passwordhash.'<br>';
echo $email.'<br>';	
/*passwordhash kryptere passwordet i databasen*/
$passwordhash = password_hash($password, PASSWORD_DEFAULT);
echo $passwordhash;



$sql = "INSERT INTO persons (username, password, email) VALUES (?,?,?)";

$stmt = $connection->prepare($sql);
$stmt->bind_param('sss', $username, $passwordhash, $email);
$stmt->execute();
/*username bliver givet et individuelt id nummer=unikt login hvergang */
echo 'inserted '.$username.' as id:'.($stmt->insert_id);


	
	
	
?>






	