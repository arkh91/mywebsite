<?php
        require_once("../dbinfo.inc");
        require_once("./frontedu.php");
        $page_title = "Import Mysql Export";
?>


<div class="page-section">
	<div class="container jumbotron " style="background-color:white">

<!--https://www.digitalocean.com/community/tutorials/how-to-import-and-export-databases-and-reset-a-root-password-in-mysql-->

		<h2>How To Import and Export Databases:</h2>
	
		<p>Importing and exporting database are really important in order to save your precious time. </p>
	
		<h4>Export</h4>
		<p>To Export a database, open up terminal, making sure that you are not logged into MySQL</p>

		<pre style="background-color: black; color:white;">
			
    <samp style="color: white;">mysqldump -u [username] -p [database name] > [database name].sql </samp>
        </pre>

		<h4> Import</h4>
		<p>To import a database, first create a new blank database in the MySQL shell to serve as a destination for your data.</p>
		
		<pre style="background-color: black; color:white;">
			
    <samp style="color: white;">CREATE DATABASE newdatabase; </samp>
        </pre>
	
		<p>Then log out of the MySQL shell and type the following on the command line:</p>
	
	
	
		<pre style="background-color: black; color:white;">
			
    <samp style="color: white;"> mysql -u [username] -p newdatabase < [database name].sql </samp>
        </pre>
        
        <p>With that, your chosen database has been imported into your destination database in MySQL.</p>
        
        
	</div>
</div>

<?php
	require_once("backedu.php");
?>
