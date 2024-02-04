<?php
	require_once("../dbinfo.inc");
	require_once("./frontedu.php");
?>

<?php
	try {
 		$dbh = new PDO("mysql:host=$host;dbname=$database",
$user, $password);
 		$result = $dbh->query('SELECT * from voice');
 		foreach($result as $row){
 			$nameVal = $row['username'];
 			$price = $row['min'];
 		print_r("<p>".$nameVal. " " . $price."</p>");
 		}
 	}catch(PDOException $e){
 		print "Error!" . $e->getMessage()."<br/>";
	}
?>

<?php
	echo "hi";

	echo "I'm about to learn PHP!<br>";
	print "<h2>PHP is Fun!</h2>";

?>
<p>hi </p>
<?php
	require_once("./backedu.php");
?>
