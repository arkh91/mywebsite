<?php
/*
$servername="localhost";
$username="hatef";
$password="Seddigheh20!";
$dbname = "cod";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
	echo "Error to connection" . "<br>";
	die('Could not Connect My Sql:' .mysql_error());
}

*/
	$servername = "localhost";
	$username = "hatef";
	$password = "Seddigheh20!";
	$dbname = "cod";


	// Create connection
	$conn = new mysqli ($servername, $username, $password, $dbname);
	// // Check connection
	if ($conn->connect_error) {
		echo "Error on Connection";
		die("Connection failed: " . $conn->connect_error);
	} 

?>
