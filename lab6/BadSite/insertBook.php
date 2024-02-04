<?php
session_start();
/* author: Sarah Carruthers
	  date: Spring 2020
	  modified by:
	  purprose: let's logged in user insert a book into the db 
	*/
	require_once("dbinfo.inc");
	
	$err;
	$authorID;
	$bookName;
	$name;
	$success;
	$status;
	if(!isset($_SESSION['UserData']['Username'])){
	   header("location:login.php");
	   exit;
	}

	if ($_SERVER['REQUEST_METHOD']=="POST"){
		$bookName = $_POST['bookname'];
		$authorID = $_POST['author'];
		$pdate = $_POST['publishdate'];
		if(trim($bookName) === "" ){
			$err = "Sorry, book's name cannot be empty";
		}
	}
	$page_title = "Insert Books";
	$name = "Sarah 'not so secure' Carruthers";
	require_once("front.php");
?>
<header><h1>Safely add things to the database</h1></header>
<div class="mainContainer text-left">
<p>
<?php
	//if there was no error set, and the name and authorID were set,
	//create a connection to the db 
	//build a query to insert the book, in $name, into the books table and authorID
	if(isset($bookName) && isset($authorID) && !isset($err)){
	
		try{
			$dbh = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
			$myQuery = "insert into books (bookName, authorID, publishDate) values (\"$bookName\", $authorID, \"$pdate\")";

			//check for insert success
			if($dbh->exec($myQuery) !==false){
				$success = $bookName." was successfully added";
			}else{
				$err = "The book was not inserted";
			}
			$dbh = null;	
		}catch(PDOException $e){
			echo "Connection failerooed: " . $e->getMessage();
		}
	}

?>
</p>	
<form action="insertBook.php" method="post">
<?php if(isset($err)) echo "<p>".$err."</p>";?>
<?php if(isset($success)) echo "<p>".$success."</p>";?>
<label for="author">Author</label>
<select name="author" id="author">
	<option value="1">Donald Knuth</option>
	<option value="2">Douglas Adams</option>
	<option value="3">Neal Stephenson</option>
	<option value="4">Neil Gaiman</option>
</select>
<label for="bookname">Book Name</label>
<input name="bookname" type="text" id="bookname"/>
<label for="publishdate">Publish Date</label>
<input name="publishdate" type="text" id="publishdate"/>	
<input type="submit" value="Insert"/>

</form>
</div>
<?php
	require_once("back.php");
	?>