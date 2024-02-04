<?php
    /* author: Ali Khazaeli
	  date: 03/12/2020
	*/
	require_once("dbinfo.inc");
	$err;
	$msg;
	$page_title="Contact Us";
	$name = "Ali Khazaeli";
	require_once("front.php");
?>
<!--
<script>
window.onload = function () {
    window.open('Xml.html','My Window','height= 480 px,width =640 ,');
};
</script>
-->

<script src="./js/telegram.js"></script>
<header>

</header>
<section class="page-section" id="contact">
<div class="container jumbotron" style="background-color:white">
  
  <h1 class="page-section-heading">Contact Information</h1> 
  
  <form class="needs-validation" novalidate>
  <!--First row -->
  <div class="form-row">
  
  <!--First Name -->
    <div class="col-md-3 mb-3">
      <label for="validationTooltip01">First name</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Ali" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    
    <!--Last Name -->
    <div class="col-md-3 mb-3">
      <label for="validationTooltip02">Last name</label>
      <input type="text" class="form-control" id="validationTooltip02" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    
    
    <!--
    <div class="col-md-4 mb-3">
      <label for="validationTooltipUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
        </div>
        <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
        <div class="invalid-tooltip">
          Please choose a unique and valid username.
        </div>
      </div>
    </div>
    -->
  </div>
  <!--Second Row -->
  <div class="form-row">
    
      <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Inquiry</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Choose...</option>
        <option value="1">Gift Card</option>
        <option value="2">Credit Card</option>
        <option value="3">Steam</option>
      </select>
    </div></div></div>
    
  

    <!--
    <div class="col-md-3 mb-3">
      <label for="validationTooltip05">Zip</label>
      <input type="text" class="form-control" id="validationTooltip05" required>
      <div class="invalid-tooltip">
        Please provide a valid zip.
      </div>
    </div>
    -->

  
  <br>
  <!--Third Row -->
  <div class="form-row">
    <!--email -->
    <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
  </div>
  
  <br>
  <!--Forth Row -->
  <div class="form-row">
       <!--phone -->
    <div class="form-group">
        <label for="exampleFormControlInput1">Phone or Telegram ID</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="+989123332211">
    </div>
  </div>
  <h3> Contact Preference </h3>
  <!--Fifth Row -->
  <div class="form-row">
  <!--contact Preference -->
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
        <label class="form-check-label" for="inlineCheckbox1">Email</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
        <label class="form-check-label" for="inlineCheckbox2">Phone (Telegram)</label>
    </div>
  </div>
  <br>
  <!--Submit -->
  <button class="btn btn-primary" type="submit">Submit</button>
  <br><br>
  <div class="form-row">
       <!--phone -->
    <div class="form-group">
        <p><b>Or</b> You can press the button below: </p>
        <a href="tg://resolve?domain=distracty" class="btn btn-info">Telegram</a>
    </div>
  </div>
 

</form>
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
</section>
<!--footer -->
<?php
	require_once("back.php");
?>
