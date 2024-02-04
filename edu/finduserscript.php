<?php
include_once("./frontedu.php");
include_once("../dbinfo1.inc");

?>

<div class="page-section">
	<div class="container jumbotron " style="background-color:white">


<?php
if(isset($_POST['discord'])){
 		 
	 $username = $_POST['discord'];
	 //echo $username . "<br>";
	 //$last_name = $_POST['last_name'];
	 //$city_name = $_POST['city_name'];
	 //$email = $_POST['email'];

	$m = "SELECT * FROM 11102020messages WHERE username = '$username'";
	$v = "SELECT * FROM 11102020voice WHERE username = '$username'";
	 //$sql = "INSERT INTO employee (first_name,last_name,city_name,email)
	 //VALUES ('$first_name','$last_name','$city_name','$email')";
	 //echo $m . "<br>";
	 //echo $v . "<br>";
	$resultm = $conn->query($m);
	$resultv = $conn->query($v);
	
	if ($resultm->num_rows > 0) {
		echo "<table class='table table-striped'>
        <tr>
        <th>Username</th>
        <th>Text</th>
        <th>Voice(min)</th>
        </tr>";
	     // output data of each row
		while($row = $resultm->fetch_assoc()) {
			//echo "Soldier: " . $row["username"]. " ----->   Min: " . $row["min"]."<br>";
			//echo $row["username"] . "\t" . " TXT: " .$row["txt"]."<br>";
			echo "<tr>";
       		echo "<td>" . $row['username'] . "</td>";
			echo "<td>" . $row['txt'] . "</td>";
        	
        	while($row = $resultv->fetch_assoc()) {
				echo "<td>" . $row['min'] . "</td>";
				echo "</tr>";
			}
		}	
		echo "</table>";
	
	}else{
		echo "There is no Data available!";
	}
        $conn->close();
}
?>
<h6> <i>Updated on <?php echo date("m/d/Y") ?> </i></h6>
	</div>
</div>

<?php
	include_once("backedu.php");
?>
