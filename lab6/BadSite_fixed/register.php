<?php
session_start();
/*author: Sarah Carruthers
	  date: Spring 2020
	  modified by:
	  purpose: super secure registration using hashed passwords
	*/
require("dbinfo.inc");
$name = "Sarah 'not so secure' Carruthers";
$page_title = "register";
require("front.php");
                        
$form_username;
$form_password;
$form_email;
$status;
$myerr;

/*
	check if value has a value
	first trim white space
	then check if both:
	the variable is set
	it is not equal to empty string (note ===)
*/
function has_presence($value) {
	$trimmed_value = trim($value);
	if(!isset($trimmed_value))
		return false;
	if($trimmed_value === "")
		return false;
	return true;
}

/*
 check for a specific length
 pass in array of options in associative array
 options: exact, max, min
 has_length($first_name, ['exact' => 20])
 has_length($first_name, ['min' => 5, 'max' => 100])
*/
function has_length($value, $options=[]) {
	if(isset($options['max']) && (strlen($value) > (int)$options['max'])) {
		return false;
	}
	if(isset($options['min']) && (strlen($value) < (int)$options['min'])) {
		return false;
	}
	if(isset($options['exact']) && (strlen($value) != (int)$options['exact'])) {
		return false;
	}
	return true;
}
function generate_salt($length){
		//generate pseudo random string (good enough)
		//returns 32 characters
		$unique_random_string = md5(uniqid(mt_rand(), true));
		
		//convert it to base 64 (valid chars are [a-zA-Z0-0./] )
		$base64_string = base64_encode($unique_random_string);
		
		//remove the '+' characters, just replace with '.'
		$modified_base64_string = str_replace('+', '.', $base64_string);
		
		//truncate off just what we need
		$salt = substr($modified_base64_string, 0, $length);
		
		return $salt;
	}
function password_encrypt($password){
		$hash_format = "$2y$10$";
		$salt_length = 22;
		$salt = generate_salt($salt_length);
		$format_and_salt = $hash_format.$salt;
		$hash = crypt($password, $format_and_salt);
		return $hash;
	}	
	
function createAccount($user, $pw, $email){
	 global $servername, $database, $username, $password;
		$myHandle;
		try{
			$myHandle = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
		}catch(PDOException $e){
			$err .="Connection failed: " . $e->getMessage(). "\n";
		}
		if($myHandle){
			
			$stmt = $myHandle->prepare("SELECT count(*) as total FROM members WHERE username=:u_name");
			$stmt->bindParam(':u_name', $user);
			$stmt->execute();
			$count = $stmt->fetchColumn();
			
			
			if($count == 0){
				$hashed_pw = password_encrypt($pw);			
				$sql = "INSERT into members (username, password, email) VALUES('$user', '$hashed_pw', '$email')";
				
				if($myHandle->exec($sql) !== false){
				  return true;
				}
				
			}else{
				echo "count is $count";
				return false;
			}
		}else{
			echo "handle bad";
			return false;
		}
		return false;
	}
//check if we've submitted the page, and if so, get the user data from the form
	if(isset($_POST['submit'])){
		$form_username = $_POST['user'];
		$form_password = $_POST['pw'];
		$form_email = $_POST['email'];
	
		//validate 
		if(!has_presence($form_username) || !has_presence($form_password)){
			$myerr = "Sorry, username and password cannot be empty  <br/>";
		}
		if (!filter_var($form_email, FILTER_VALIDATE_EMAIL)) {
  			$myerr = " Invalid email format <br/>"; 
		}

		if(!isset($myerr) && !has_length($form_username, ['min'=>4, 'max' =>30])){
			$myerr = "Sorry, name must be between 4 and 30 characters long  <br/>";
		}else if(!isset($myerr) && !has_length($form_password, ['min'=>6])){
			$myerr = "Sorry, password must be at least 6 characters long  <br/>";
		}
		
		//create account
		if(!isset($myerr) && createAccount($form_username, $form_password, $form_email)){
			$status = 1;
			$_SESSION['UserData']['Username'] = $form_username;
			header("location:insertBook.php");
			exit;
		}else{
			$status = 0;
		}
		
	}
?>
<header>	<h1>Register here</h1></header>
<div class="mainContainer text-left">
<form action="register.php" method="POST">
	<label for="user">User Name: </label>
	<input type="text" id="user" name="user" required="required"\>
	<label for="pw">Password </label>
	<input type="password" id="pw" name="pw" required="required"\>
	<label for="email">Email </label>
	<input type="text" id="email" name="email" required="required"\>
	<input type="submit" id="submit" name="submit" value="register"\>
</form>
<?php 
	//if register fails, show an error
	if(isset($myerr)){
		echo "error: ".$myerr."</br>";
	}else if($status === 0){
		echo "<p>Sorry, that name is already taken</p>";
	} 
?>
</div>
<?php
require_once("back.php");
?>