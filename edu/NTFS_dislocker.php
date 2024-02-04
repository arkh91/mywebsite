<?php
/*  author: Ali Khazaeli
    date: 04/12/2020
*/
	//require_once("dbinfo.inc");
	$page_title = "NTFS dislocker";
	$name = "Ali Khazaeli";
	require_once("./frontedu.php");
?>
<div class="page-section">
<div class="container jumbotron " style="background-color:white">

<h2>How to Decrypt/Open BitLocker Encrypted NTFS on Linux</h2><br>
	<h5>Requirments:</h5>
	<p>you need to have sudo access.</p>
	<p>you need to have Bitlocker recovery code.</p>
	 <!--
            Step 1
        -->
	<h3>Step 1 — Installing Dislocker</h3>
	<div style="padding-left:3%; line-height: 2;">
	<ol>
		<li>Press <b>Ctrl+Alt+T</b> top open terminal</li>
		<li>Type <kbd>sudo su</kbd> and press Enter.</li>
		<li>Enter your login password for the current account.</li>
		<li>Execute the <kbd>sudo apt-get install dislocker</kbd> command.</li>
	</ol>
	</div>
	<!--
            changed
        
	<h2>Step 2 — Set up a folder to mount the Bitlocker Drive</h2>
	<p>To mount the BitLocker encrypted drive, we have to create a folder for it. You can run the command lines below and hit Enter at the end of each line.</p>
	<pre>
	<div id="folder">
		<lu>
			<li>sudo mkdir /media/bitlocker</li>
			<li>sudo mkdir /media/mount</li>
		</lu>
	</div>
	</pre>

	<h2>Step 3 — View Mounted Drive</h2>
	<p>Then we need to find out which is the target BitLocker USB drive. We can identify the BitLocker drive based on its size. Execute the command:</p>
	<pre>
	<div id="folder">
		<lu>
			<li>sudo fdisk -l</li>
		</lu>
	</div>
	</pre>

	<h2>Step 4 — Decrypt BitLocker with recovery key.</h2>
	<p>Now, lets mount the BitLocker drive on Linux.</p>
	<pre>
	<div id="folder">
		<lu>
			<li>sudo mount -r -o loop /media/bitlocker/dislocker-file /media/mount</li>
		</lu>
	</div>
	</pre>
	<p>if you got the error "Intfs-3g-mount: mount failed: Permission denied", Run following Command</p>
	<pre>
	<div id="folder">
		<lu>
			<li>mount -o ro,loop /media/bitlocker/dislocker-file /media/mount</li>
		</lu>
	</div>
	</pre>
	<p>If it shows that you don’t have the permission to access, you can switch to root state.</p>
	<pre>
	<div id="folder">
		<lu>
			<li>sudo -i</li>
			<li>cd /media/bitlocker</li>
		</lu>
	</div>
	</pre>
	<p>After that, you can open the BitLocker drive on Linux to transfer files between Windows and Linux.</p>
-->
	<!--
            Step 2
        -->
	<h3>Step 2 — Set up a folder to mount the Bitlocker Drive</h3>
	<p>To mount the BitLocker encrypted drive, we have to create a folder for it. You can run the command lines below and hit Enter at the end of each line.</p>
	<pre style="background-color: black; color:white;">

  sudo mkdir /media/bitlocker
  sudo mkdir /media/mount
	</pre>
	<br>
	 <!--
            Step 3
        -->
	<h3>Step 3 — View Mounted Drive</h3>
	<p>Then we need to find out which is the target BitLocker USB drive. We can identify the BitLocker drive based on its size. Execute the command:</p>
	<pre style="background-color: black; color:white;">
  
  sudo fdisk -l
	</pre>
	<br>
	<!--
            Step 4
        -->
	<h3>Step 4 — Decrypt BitLocker with recovery key.</h3>
	<p>Now, lets mount the BitLocker drive on Linux.</p>
	<pre style="background-color: black; color:white;">

  sudo mount -r -o loop /media/bitlocker/dislocker-file /media/mount
	</pre>
	<br>
	<p>if you got the error "Intfs-3g-mount: mount failed: Permission denied", Run following Command</p>
	<pre style="background-color: black; color:white;">
		
  mount -o ro,loop /media/bitlocker/dislocker-file /media/mount
	</pre>
	<br>
	
	<p>If it shows that you don’t have the permission to access, you can switch to root state.</p>
	<pre style="background-color: black; color:white;">
		
  sudo -i
  cd /media/bitlocker
	</pre>
	<br>
	<p>After that, you can open the BitLocker drive on Linux to transfer files between Windows and Linux.</p>

</div>
</div>
<!--footer -->
<?php
	require_once("./backedu.php");
?>
