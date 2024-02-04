<?php
/*  author: Ali Khazaeli
    date: 03/12/2020
*/
	require_once("./dbinfo.inc");
	$page_title = "PS4 Gift Card";
	$name = "Ali Khazaeli";
	require_once("front.php");

	try {
 		$dbh = new PDO("mysql:host=$host;dbname=$database",
$user, $password);
 		$result = $dbh->query('SELECT * from messages');
 		foreach($result as $row){
 			$nameVal = $row['username'];
 			$price = $row['min'];
 			print_r("<p>".$nameVal. " " . $price."</p>");
 }
 	}catch(PDOException $e){
 		print "Error!" . $e->getMessage()."<br/>";
 	}
?>
<div class="page-section">
<div class="container jumbotron " style="background-color:white">
<!--
<p> Antique Galleria Use Cases:</p>
	<ul>
		<li><a href="showAntique.php">Search and View showAntique</a></li>
		<li><a href="showBylaws.php">Search and view Bylaws</a></li>
        <li><a href="insertBook.php">Document Antique</a></li>
        <li><a href="login.php">Create Trade Interest</a></li>
        <li><a href="logout.php">Make trade Offer</a></li>
        <li><a href="logout.php">Apply for Mall Block</a></li>
	</ul>
-->	
	<div class="container">
  <h1> Gift Cards</h1><br>
  <div class="row">
    <div class="col-lg-3 col-md-4 col-6 "><a href="./ps4cadgc.php"><img class="img-thumbnail img-fluid" src="./img/$10CAD.jpg" alt=""></a>
    <br><br>
    <h6>PS4 Canadian Gift Card </h6><br>
    </div>
    
    <div class="col-lg-3 col-md-4 col-6 "><a href="./ps4usdgc.php"><img class="img-thumbnail img-fluid" src="./img/$25CAD.jpg"></a>
    <br><br>
    <h6>PS4 U.S. Gift Card </h6><br>
    </div>
    
    <div class="col-lg-3 col-md-4 col-6 "><a href="./steam.php"><img class="img-thumbnail img-fluid" src="./img/$50CAD.jpg" alt=""></a>
    <br><br>
    <h6>Steam </h6>
    </div>
    <!--
    <div class="col-lg-3 col-md-4 col-6 "><a href="./contactform.php"><img class="img-thumbnail img-fluid" src="./img/$100CAD.jpg" alt=""></a>
    <br><br>
    <h6><b> $100 </b>PlayStation Gift Card </h6>
    </div>
    -->
    
  </div>
</div>
	
</div>
</div>
<!--footer -->
<?php
	require_once("back.php");
?>
