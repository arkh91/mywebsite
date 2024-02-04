<?php
//echo "ali";
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "hatef", "Seddigheh20!", "cod");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$discord = $mysqli->real_escape_string($_REQUEST['submit']);
//$last_name = $mysqli->real_escape_string($_REQUEST['last_name']);
//$email = $mysqli->real_escape_string($_REQUEST['email']);
//
echo $discord . "hello" . "<br>"; 
// Attempt insert query execution
$record = "SELECT * FROM user WHERE discord_id = $discord";
//$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
/*
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 */
// Close connection
$mysqli->close();
?>
