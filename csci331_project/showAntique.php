<?php
	/* author: Ali Khazaeli
	  date: 03/12/2020
	*/
	require_once("dbinfo.inc");
	$err;
	$msg;
	$title = "Antique";
	if(isset($_GET['authorID'])){
		
		$title = $_GET['authorName'] ."'s Super Awesome Books";
	}
	$page_title = "Antique";
	$name = "Ali Khazaeli";
	require_once("front.php");
?>

<header>
<div style="margin-top:10%">
	<h1>Search and View Antique</h1>
</header>
</div>
<!-- Search form -->
  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Search">
    <div class="input-group-append">
      <button class="btn btn-success" type="submit">Go</button>  
     </div>
  </div>

<div class="mainContainer">
<form method="get" action="showBooks.php">
<?php
if(isset($_GET['authorID'])){

//we've selected an author, so build a table of that author's books
	echo "<div class='myTable'>".
		"<div class='myRow'><span class='myCol table-head'>Author</span><span class='myCol table-head'>Book</span><span class='myCol table-head'>Publisher</span>".
		"</div>";
	
	//create a connection to the database
	$myHandle;
	try{
		$myHandle = new PDO("mysql:host=$host;dbname=$database", $username, $password);

	}catch(PDOException $e){
		$err .= "Connection failed: " . $e->getMessage() . "\n";
	}	
		
	//if the database connection was valid	
	if($myHandle){
		//find out which band they selected
		$authorID = $_GET['authorID'];
		
		//build a query to get all that author's books
		$mystmt = "select authorFName, authorLName, bookName, publisherName from authors, books, publishers where authors.authorID=$authorID and authors.authorID=books.authorID and books.publisherID=publishers.publisherID";
		//query the db
		$rslt = $myHandle->query($mystmt);
		
		//iterate through the returned results, and build an array of books
		$i=1;
		foreach($rslt as $row){
			foreach($row as $field=>$value){
				$books[$i][$field] = $value;
			}
			$i++;
		}
		$numBooks = sizeof($books);

		//iterate through the array of books and build a table
		for($j=1; $j<=$numBooks; $j++){
		//build the table
			echo "<div class='myRow'>";
			echo "<span class='myCol'>{$books[$j]['authorFName']} {$books[$j]['authorLName']}</span>";
			echo "<span class='myCol'>{$books[$j]['bookName']}</span>";
			echo "<span class='myCol'>{$books[$j]['publisherName']}</span>";
			echo "</div>\n";		
		}
		echo "<a href='showBooks.php'>Back</a>";//put a link back, after the table
	}
	echo "</div>";//end table	
}else{

	//this is if we haven't picked an author yet
	//we build the dropdown list	
	//create a connection to the database
	$myHandle;
	try{
		$myHandle = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

	}catch(PDOException $e){
		$err .= "Connection failed: " . $e->getMessage() . "\n";
	}	
	//if the connection to the db is valid
	if($myHandle){
		//build a query to get the band names and ids from the db
		$mystmt = "select authorFName, authorLName, authorID from authors order by authorLName";
		$rslt = $myHandle->query($mystmt);
		
		//build an associative array, where the author's id is the key, and the author's name is the value
		$i = 1;
		foreach($rslt as $row){
			foreach($row as $field=>$value){
				$authors[$i][$field] = $value;
			}
			$i++;
		}	
		$i++;
		
		$numAuthors = sizeof($authors);
		//build a drop down for the author
		echo "<label style='padding-right:5px;' for='authorID'>Pick an Author:  </label>".
			 "<select id='authorID' name='authorID' onchange='setName()'>";
		for($j=1; $j<=$numAuthors; $j++){
		   $fullName = $authors[$j]['authorFName'].' '.$authors[$j]['authorLName'];
		//build the table
			echo "<option value=\"{$authors[$j]['authorID']}\">$fullName</option>";//{$authors[$j]['authorFName']} {$authors[$j]['authorLName']}</option>";	
		}
		echo "</select><br/>".
		     "<input type='submit' value='Get Books'/>".
		     //this hidden input contains the band's name, which is needed later
		     //initialize it to the 1st option's value
			 "<input type='hidden' id='authorName' name='authorName' value=\"{$authors[1]['authorName']}\"/>";	
	}
	$myHandle=null;
}
?>
</form>
</div>
<script>
	/*
		This function is called when the dropdown changes value
		It copies the name of the author into the hidden input element
	*/

	function setName(){
		var authorID = document.getElementById('authorID');

    	if (authorID.selectedIndex == -1)
        	return null;

    	var authorName = authorID.options[authorID.selectedIndex].text;
    	document.getElementById('authorName').value = authorName;
		
	}
</script>
<?php
require_once("back.php");
?>
