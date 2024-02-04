<?php
        require_once("../dbinfo.inc");
        require_once("./frontedu.php");
?>

<script src="../ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  	$("#flip").click(function(){
    		$("#panel").slideToggle("slow");
  	});
  	
  	$("#flipone").click(function(){
    		$("#panelone").slideToggle("slow");
  	});
  	
  	$("#fliptwo").click(function(){
    		$("#paneltwo").slideToggle("slow");
  	});
  	
  	$("#fliptwoone").click(function(){
    		$("#paneltwoone").slideToggle("slow");
  	});
  	
  	
  	$("#flipthree").click(function(){
    		$("#panelthree").slideToggle("slow");
  	});
});
</script>

<div class="page-section">
	<div class="container jumbotron " style="background-color:white">

<!--https://www.thegeekstuff.com/2010/04/7z-7zip-7za-file-compression/ -->
	
	<h2>Compress and Uncompress files on Ubuntu, Fedora</h2>
	<p>Available commands: </p>
	<ul>
		<li>a: Add files to archive</li>
		<li>b: Benchmark</li>
		<li>d: Delete files from archive</li>
		<li>e: Extract files from archive (without using directory names)</li>
		<li>l: List contents of the archive</li>
		<li>t: Test integrity of the archive</li>
		<li>u: Update files to archive</li>
		<li>x: Extract files with full paths</li>
	</ul>
	
	<p id="flip"> Install p7zip to unzip *.7z files on Debian and Ubuntu </p>
 
	<pre id="panel" style="background-color: black; color:white;">		
    sudo apt-get install p7zip
	</pre>
	
	
	
	<p id="flipone">Verify whether you have 7za command on your system.</p>

	<pre id="panelone" style="background-color: black; color:white;">		
    whereis 7za 
    7za: /usr/bin/7za /usr/share/man/man1/7za.1.gz	
	</pre>

	<h4> Creating 7zip compression</h4>
    <p>There are two methods of compressing a file or folder. <br>
    1. Compressing in 1 file. <br>
    2. Compressing in multiple files. <br>
    </p>
	<h5 id="fliptwo"> Creating <b>One</b> 7zip compression</h5>
	
	<pre id="paneltwo" style="background-color: black; color:white;">		
    <samp style="color: white;">
    $7za a myfiles.7z myfiles/

    7-Zip (A) 9.04 beta  Copyright (c) 1999-2009 Igor Pavlov  2009-05-30
    p7zip Version 9.04 (locale=C,Utf16=off,HugeFiles=on,1 CPU)
    Scanning

    Creating archive myfiles.7z

    Compressing  myfiles/test1
    Compressing  myfiles/test2      

    Everything is Ok
	</samp>
    </pre>


<!--https://superuser.com/questions/184557/how-to-create-multipart-7zip-file-in-linux -->
	<h5 id="fliptwoone"> Creating <b>Multiple</b> 7zip compression</h5>
	<p>Use the <kbd>-v</kbd> option (v is for volume) <kbd>-v100m</kbd> will split the archive into chunks of 100MB.<br>

	7z -v option supports <kbd>b k m g</kbd> (bytes, kilobytes, megabytes, gigabytes)</p>

	<pre id="paneltwoone" style="background-color: black; color:white;">		
    7z -v100m a my_zip.7z my_folder/
    </pre>




    <h5 id="flipthree"> Uncompressing a *.7z 7zip files in Linux using 7za</h5>

	<pre id="panelthree" style="background-color: black; color:white;">		
    <samp style="color: white;">
    $ 7za e myfiles.7z 

    7-Zip (A) 9.04 beta  Copyright (c) 1999-2009 Igor Pavlov  2009-05-30
    p7zip Version 9.04 (locale=C,Utf16=off,HugeFiles=on,1 CPU)

    Processing archive: ../../myfiles.7z

    Extracting  myfiles/test1
    Extracting  myfiles/test2
    Extracting  myfiles/test
    Extracting  myfiles

    Everything is Ok

    Folders: 1
    Files: 3
    Size:       7880
    Compressed: 404
	</samp>
    </pre>





	</div>
</div>

<?php
	require_once("backedu.php");
?>
