
<?php
	require_once("frontedu.php");
?>

<div class="page-section">
        <div class="container jumbotron " style="background-color:white">

<?php
if ($handle = opendir('.')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

            //echo "$entry\n". "<br>";
		//echo "<a href="$entry">$entry</a>" . "<br>";
		echo "<a href='$entry'> '$entry'</a>" . "<br>";
		
	}
    }

    closedir($handle);
}

?>
	
	</div>
</div>

<?php
	require_once("backedu.php");
?>
