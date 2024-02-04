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


?>
