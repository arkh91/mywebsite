<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','hatef','Seddigheh20!','cod');
if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
//$sql="SELECT * FROM user WHERE id = '".$q."'";
$sql="SELECT * FROM voice WHERE min = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
	<tr>
	<th>Username</th>
	<th>Minutes</th>
	</tr>";

while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "hi";
	echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['min'] . "</td>";
        echo "</tr>";
}
echo "</table>";
mysqli_close($con);

?>

