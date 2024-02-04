<?php
/*  author: Ali Khazaeli
    date: 03/12/2020
*/
	require_once("dbinfomoney.inc");
	$page_title = "PS4 Canadian Gift Card";
	$name = "Ali Khazaeli";
	require_once("front.php");
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
  <h1>PlayStation4 Canadian Gift Cards</h1><br>
  <div class="row">
    <div class="col-lg-3 col-md-4 col-6 "><a href="./contactform.php"><img class="img-thumbnail img-fluid animated flipInX" src="./img/$10CAD.jpg" alt="" ></a>
    <br><br>
    <h6><b> $10 </b>PlayStation Gift Card </h6>
<?php
	$q = "SELECT price FROM Money where abb = 'cad'";

        $result = $conn->query($q);
        if ($result->num_rows > 0) {
             // output data of each row
                while($row = $result->fetch_assoc()) {
			$price = $row["price"] * 10; 
			echo "<p> The price is $price Toman. </p>" . "<br>" . "<br>";    
		}
        }else {
               echo "0 results";
        }
        //$conn->close();
?>
    </div>
    
    <div class="col-lg-3 col-md-4 col-6 "><a href="./contactform.php"><img class="img-thumbnail img-fluid animated flipInX" src="./img/$25CAD.jpg"></a>
    <br><br>
    <h6><b> $25 </b>PlayStation Gift Card </h6>
<?php
      	$q = "SELECT price FROM Money where abb = 'cad'";

        $result = $conn->query($q);
        if ($result->num_rows > 0) {
             // output data of each row
                while($row = $result->fetch_assoc()) {
                       $price = $row["price"] * 25;
                        echo "The price is $price Toman." . "<br>" . "<br>";
		}             
      	}
?>
    </div>
    
    <div class="col-lg-3 col-md-4 col-6 "><a href="./contactform.php"><img class="img-thumbnail img-fluid animated flipInX" src="./img/$50CAD.jpg" alt=""></a>
    <br><br>
    <h6><b> $50 </b>PlayStation Gift Card </h6>
<?php
	$q = "SELECT price FROM Money where abb = 'cad'";

        $result = $conn->query($q);
        if ($result->num_rows > 0) {
             // output data of each row
                while($row = $result->fetch_assoc()) {
                       $price = $row["price"] * 50;
                        echo "The price is $price Toman." . "<br>" . "<br>";
                }
        }
?>


    </div>
    
    <div class="col-lg-3 col-md-4 col-6 "><a href="./contactform.php"><img class="img-thumbnail img-fluid animated flipInX" src="./img/$100CAD.jpg" alt=""></a>
    <br><br>
    <h6><b> $100 </b>PlayStation Gift Card </h6>
<?php
	   $q = "SELECT price FROM Money where abb = 'cad'";

        $result = $conn->query($q);
        if ($result->num_rows > 0) {
             // output data of each row
                while($row = $result->fetch_assoc()) {
                       $price = $row["price"] * 100;
                        echo "The price is $price Toman." . "<br>" . "<br>";
                }
        }
?>

    </div>
    
    
  </div>
</div>
	
</div>
</div>
<!--footer -->
<?php
	$conn->close();
	require_once("back.php");
?>
