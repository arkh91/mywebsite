<?php
session_start();
/*author: Sarah Carruthers
	  date: Spring 2020
	  modified by:
	  purpose: super secure login using hashed passwords
	*/
require("dbinfo.inc");//db connection info
$page_title = "Login";
$name = "Sarah 'not so secure' Carruthers";
require("front.php");
$status;
$err;

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
//compares a password attempt to the existing hashed password
function password_check($password, $existing_hash){
	 global $log;
	 $hash = crypt($password, $existing_hash);
//         $log .= "in check: hashed $hash, ";
	if($hash === $existing_hash){
		return true;
	}else{
		return false;
	}
}

//using user-entered password and userid, compare to contents of members table in db
function attempt_login($userID, $passwordAttempt){

	 global $servername, $database, $username, $password;
	 global $log;
	 
	 $myHandle;
	try{
		$myHandle = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
	
	}catch(PDOException $e){
	
		$err .="Connection failed: " . $e->getMessage(). "\n";
	}
	if($myHandle){

	
		$myStmt = "SELECT username, password FROM members WHERE username='$userID'";
		$rslt = $myHandle->query($myStmt);
		$log = $myStmt;
		if(count($rslt) > 0){
			foreach($rslt as $row){
				$hashed_pw = $row['password'];
			}
		
			if(password_check($passwordAttempt, $hashed_pw)){
				
				return true;
			}else{
//				$log .="attempt: $passwordAttempt, hash: $hashed_pw, password didn't match";
				return false;
			}
		}else{
//			$log .= "user name did not match";
			return false;
		}
	}
	return false;
}

if(isset($_SESSION['UserData']['Username'])){
 	$status=2;
}
if(isset($_GET['submit'])){
   $form_name=$_GET['user'];
   $form_pw=$_GET['pw'];
   //validate data
   if(!has_presence($form_name) || !has_presence($form_pw)){
        $err = "Sorry, username and password cannot be empty";
   }

   //attempt login with submitted data
   if(!isset($err) && attempt_login($form_name, $form_pw)){
		$_SESSION['UserData']['Username'] = $form_name;
		$status = 1;
   }else{
		$status = 0;
		$err .= "Sorry, login failed, please try again.";
	}
}
	
?>
<header><h1>Login!</h1></header>
<div class="mainContainer text-left">
<?php
	if(isset($err)){
		echo $err."<br/>";
	}
?>
<form action="login.php" method="GET">
	<label for="user">User Name: </label>
	<input type="text" id="user" name="user" required="required"/>
	<label for="pw">Password: </label>
	<input type="password" id="pw" name="pw" required="required"/>
	<input type="submit" id="submit" name="submit" value="login"/>
</form>

<?php 
	//check status, and either show logged in, or show register link
	if($status === 1 || $status ===2){
		echo "you're totally logged in: ".$_SESSION['UserData']['Username'].
			"<br/>";
		echo "<a href=\"logout.php\">Logout</a>";
	}else{
		echo "Don't have an account? Create one: ";
		echo "<a href=\"register.php\">Register</a>";
	}
?>

</div>
<?php
require_once("back.php");
?>