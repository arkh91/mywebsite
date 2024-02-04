<?php
/*  author: Ali Khazaeli
    date: 03/12/2020
*/
	require_once("dbinfo.inc");
	$page_title = "CSCI331";
	$name = "Ali Khazaeli";
	require_once("front.php");
?>
<header>
<div style="margin-top:10%">
<h1>Welcome to Antique Galleria</h1>
</div>
</header>
<div class="mainContainer text-left">

	<p> Antique Galleria Use Cases:</p>
	<ul>
		<li><a href="showAntique.php">Search and View showAntique</a></li>
		<li><a href="showBylaws.php">Search and view Bylaws</a></li>
        <li><a href="insertBook.php">Document Antique</a></li>
        <li><a href="login.php">Create Trade Interest</a></li>
        <li><a href="logout.php">Make trade Offer</a></li>
        <li><a href="logout.php">Apply for Mall Block</a></li>
	</ul>
	
</div>
<?php
	require_once("back.php");
?>
