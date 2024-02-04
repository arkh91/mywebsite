<?php
include_once("../frontedu.php");
include_once("../dbinfo1.inc");

if(isset($_POST['discord'])){
 		 
	 $username = $_POST['discord'];
	 //echo $username . "<br>";
	 //$last_name = $_POST['last_name'];
	 //$city_name = $_POST['city_name'];
	 //$email = $_POST['email'];
	 //$sql = "SELECT username, txt FROM 11102020messages WHERE username";// = $first_name";
	$sql = "SELECT * FROM 11102020messages WHERE username = '$username'";
	 //$sql = "INSERT INTO employee (first_name,last_name,city_name,email)
	 //VALUES ('$first_name','$last_name','$city_name','$email')";
	 echo $sql . "<br>";
	 
	$result = $conn->query($sql);

	
	if ($result->num_rows > 0) {
		echo "<table class='table table-striped'>
        <tr>
        <th>Username</th>
        <th>Texts</th>
        </tr>";
	     // output data of each row
		while($row = $result->fetch_assoc()) {
			//echo "Soldier: " . $row["username"]. " ----->   Min: " . $row["min"]."<br>";
			//echo $row["username"] . "\t" . " TXT: " .$row["txt"]."<br>";
			echo "<tr>";
       		echo "<td>" . $row['username'] . "</td>";
			echo "<td>" . $row['txt'] . "</td>";
        	echo "</tr>";
		}	
		echo "</table>";
	//	}
	
        } else {
               echo "0 results";
	}
        $conn->close();
	 
	 
/*
	 
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 }
		//echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
*/
}

?>
