<?php
    /* author: Ali Khazaeli
	  date: 03/12/2020
	*/
	require_once("dbinfo.inc");
	$err;
	$msg;
	$page_title="Bylaws";
	$name = "Ali Khazaeli";
	require_once("front.php");
?>
<header>
<div style="margin-top:10%">
<h1>Search and View Bylaws</h1>
</div>
</header>

  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Search">
    <div class="input-group-append">
      <button class="btn btn-success" type="submit">Go</button>  
     </div>
  </div>
  
<div class="mainContainer">

<div class="myTable">
<!--
<div class="myRow">
	<span class="myCol table-head">Author</span>
	<span class="myCol table-head">Book</span>
	<span class="myCol table-head">Publish Date</span>
	</div>
-->
<?php
//connect to db and get the author, book:

	$myHandle;
	try{
		$myHandle = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

	}catch(PDOException $e){
		$err .= "Connection failed: " . $e->getMessage() . "\n";
	}
	//if the db connection was successful	
	if($myHandle){
	//build the query
		$mystmt = "select authorFName, authorLName, bookName, publishDate from authors, books where authors.authorID=books.authorID order by authorLName";
	
		$rslt = $myHandle->query($mystmt);
		$i = 1;
		$books;
		//iterate through the result set
		//building an associative array for each field, for each row
		foreach($rslt as $row){
			foreach($row as $field=>$value){
				$books[$i][$field] = $value;
			}
			$i++;
		}
		$numBooks = sizeof($books);
		for($j=1; $j<=$numBooks; $j++){
			//build the table
			echo "<div class='myRow text-left'>";
			echo "<span class='myCol'>{$books[$j]['authorFName']} {$books[$j]['authorLName']}</span>";
			echo "<span class='myCol'>{$books[$j]['bookName']}</span>";
			echo "<span class='myCol'>{$books[$j]['publishDate']}</span>";
			echo "</div>\n";
		}
		
	}
	
?>
</div>
</div>
<?php
	require_once("back.php");
?>
