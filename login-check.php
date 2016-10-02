<?php session_start();

require_once('dbcon.php');

$username = filter_input(INPUT_POST, 'username') or die('Wrong');

$password = filter_input(INPUT_POST, 'password') or die('password missing');


$sql = "SELECT id, username, password FROM persons WHERE username=?";

    $stmt = $connection->prepare($sql);
    $stmt->bind_param('s',$username);
    $stmt->execute();
    $stmt->bind_result($id, $username, $passwordhash);
    if($stmt->fetch()){	
		//echo '('.$passwordhash.') : '.$username.'<br/>';	
        	
	}
	
if(password_verify($password,$passwordhash)){
		echo 'Login YAY';
	$_SESSION['uid'] = $id;
			
		} else{
			echo 'login failed';
		
		}
    

?>
