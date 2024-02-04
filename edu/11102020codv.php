<?php
	require_once("../dbinfo.inc");
	require_once("./frontedu.php");
?>


<div class="page-section">
	<div class="container jumbotron " style="background-color:white">

<h1> CODM Record Based on Voices: </h1>

  <!--Second Row -->
<!--
  		<div class="form-row">
      			<div class="form-row align-items-center">
          			<div class="col-auto my-1">
	        			<label class="mr-sm-2" for="inlineFormCustomSelect">Inquiry:</label>
		      			<select name="title" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
		              			<option selected>Choose...</option>
						<option value="Voices">Voices</option>>
				        	<option value="messages">Messages</option>
					</select>
				</div>
			</div>		
		</div>
-->
<?php
	//$select= '<select name="db">';
//	echo "$select";
//	echo "<select name='db'>"
?>


<?php
	$servername = "localhost";
	$username = "hatef";
	$password = "Seddigheh20!";
	$dbname = "cod";


	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// // Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
/*

// Assume $db is a PDO object
$query = $db->query("YOUR QUERY HERE"); // Run your query

echo '<select name="db">'; // Open your drop down box

// Loop through the query results, outputing the options one by one
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
   echo '<option value="'.$row['something'].'">'.$row['something'].'</option>';
}

echo '</select>';// Close your drop down box

$sql = "SELECT username, min FROM voice ORDER BY min DESC";
$result = mysql_query($sql);

echo "<select name='voices'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['username'] . "'>" . $row['username'] . "</option>";
}
echo "</select>";

*/

	
	$voice = "SELECT username, min FROM 11102020voice ORDER BY min DESC";
	
	$result = $conn->query($voice);

	echo "<table class='table table-striped'>
        	<tr>
        	<th>Username</th>
        	<th>Minutes</th>
        	</tr>";




	if ($result->num_rows > 0) {
	     // output data of each row
		while($row = $result->fetch_assoc()) {
			//echo "Soldier: " . $row["username"]. " ----->   Min: " . $row["min"]."<br>";
			//echo $row["username"] . "\t" . " Min: " .$row["min"]."<br>";
		echo "<tr>";
                        echo "<td>" . $row['username'] . "</td>";
                        echo "<td>" . $row['min'] . "</td>";
                        echo "</tr>";
                }
	echo "</table>";
	
        } else {
               echo "0 results";
	}
        $conn->close();
?>

<!-- <p>hi </p>
-->
	<h6> <i>Updated on 11/10/2020 </i></h6>
	</div>
</div>
<?php
	require_once("./backedu.php");
?>
