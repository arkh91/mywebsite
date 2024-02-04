<?php
/*  author: Ali Khazaeli
    date: 04/12/2020
*/
	//require_once("dbinfo.inc");
	$page_title = "install, unistall and disable phpMyAdmin";
	$name = "Ali Khazaeli";
	require_once("./frontedu.php");
?>
<div class="page-section">
	<div class="container jumbotron " style="background-color:white">
               <br>
        <h2>How to install, unistall and disable phpMyAdmin</h2>
        <p>
        This guide will show you the easiest way to install phpMyAdmin and all the configuration for online access.
        </p>
        
        <h3>Requirment</h3>
        
        <p>You need to have <kbd>sudo</kbd> access.</p>
        <p>You need to have <kbd>apache2</kbd> installed.</p>
        <h3>Step 1 — Installing phpmyadmin and other dependencies.</h3>

        <pre style="background-color: black; color:white;">
			
    sudo apt update
    sudo apt install phpmyadmin php-mbstring php-gettext
        </pre>
        <br>
        
         <div style="background-color: pink; color:black; padding-left: 30px; padding-bottom: 20px; padding-top: 20px; padding-right: 20px;">

    When the prompt appears, “<b>apache2</b>” is highlighted, <b>but</b> not selected. If you do not hit SPACE to select Apache, 
    the installer will not move the necessary files during installation. Hit SPACE, TAB, and then ENTER to select Apache.


        </div>
        <br>
        <div style="padding-left:5%;">
			<h4>Step 1.1 — Package Configuration.</h4>
			<p>At this step press <kbd>SPACE</kbd>.</p>
			
			<div style="padding-left:1%">
				<img src="../img/edu/myphpadmin.png" class="img-fluid img-thumbnail text-center" alt="credential creation page" style=" filter: none;">
			</div>
			<br>
			<p>An aestricks will be placed next to the apache2.</p>

			<p>At this step press <kbd>TAB</kbd>.</p>
			<div style="padding-left:1%">
				<img src="../img/edu/myphpadmin1.png" class="img-fluid img-thumbnail text-center" alt="credential creation page" style=" filter: none;">
			</div>
			
			<br>
			<h4>Step 1.2 — Package Configuration.</h4>
			<p>At this step, press <kbd>No</kbd> for dbconfig-common database configuration.</p>
			<div style="padding-left:1%">
				<img src="../img/edu/myphpadmin3.png" class="img-fluid img-thumbnail text-center" alt="credential creation page" style=" filter: none;">
			</div>
			
		</div>
		<br>
		
		<h3>Step 2 — Creating a new user for mysql.</h3>
		<p>Using <kbd>Terminal</kbd> we access to the database.</p>
		<pre style="background-color: black; color:white;">
			
    sudo mysql
        </pre>
        <br>
        <div style="padding-left:5%;">
			<h4>Step 2.1 — mysql configuration.</h4>
			<p>If you don't care what the password policy is. You can set it to LOW by issuing below mysql command:</p>
			<pre style="background-color: black; color:white;">
				
   mysql> SET GLOBAL validate_password_policy=LOW;
			</pre>
			<br>
			<h4>Step 2.2 — set up the new user.</h4>
			<pre style="background-color: black; color:white;">
				
   mysql> CREATE USER '<samp style= color:lightblue;>newuser</samp>'@'localhost' IDENTIFIED BY '<samp style= color:lightblue;>password</samp>';
			</pre>
			<br>
			<h4>Step 2.3 — set up the privileges</h4>
			<pre style="background-color: black; color:white;">
				
   mysql> GRANT ALL PRIVILEGES ON * . * TO '<samp style= color:lightblue;>newuser</samp>'@'localhost';
   mysql> FLUSH PRIVILEGES;    
			</pre>
		</div> <!-- the end of step2 -->
		<br>
        <h3>Step 3 — Restart the apache2</h3>
        <P>And the end, restart the apache2</P>
        <pre style="background-color: black; color:white;">
			
    sudo systemctl restart apache2
        </pre>
        <br>
        
        <h3>Step 4 — Accessing phpMyAdmin</h3>
        <pre style="background-color: black; color:white;">
			
    http://<samp style= color:lightblue;>your_domain_or_IP</samp>/phpmyadmin
        </pre>
        <br>
        <h3>Uninstall phpMyAdmin in Ubuntu</h3>
        <pre style="background-color: black; color:white;">
			
    sudo apt-get remove phpmyadmin
    sudo apt-get purge phpmyadmin
    sudo apt-get autoremove
        </pre>
        <br>
        
        <h3>Disable phpMyAdmin without uninstalling</h3> 
		<pre style="background-color: black; color:white;">
			
    sudo a2disconf phpmyadmin
    sudo systemctl reload apache2
        </pre>
        <br> 
        <p>For re-enabling phpMyAdmin, run:</p>
        <pre style="background-color: black; color:white;">
			
    sudo a2enconf phpmyadmin
    sudo systemctl reload apache2
        </pre>
</div>
</div>
<!--footer -->
<?php
	require_once("./backedu.php");
?>
