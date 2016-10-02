<?php
/*opret forbindelse til databasen med de nødvendige oplysinger*/
define("HOSTNAME", "localhost");
define("MYSQLUSER", "ceciliek");
define("MYSQLPASS", "Cecilie166");
define("MYSQLDB", "ceciliek_mul_a");

$connection = new MySQLi(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);

if($connection->connect_error){
die('connect_error ('.$connection->connect_error.') '.$connection_error); 
} $connection->set_charset('utf8');

?>