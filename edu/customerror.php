<?php
    /* author: Ali Khazaeli
	  date: 03/12/2020
	  https://www.digitalocean.com/community/tutorials/how-to-configure-apache-to-use-custom-error-pages-on-ubuntu-14-04
	*/
	//require_once("dbinfo.inc");
	$err;
	$msg;
	$page_title="Custom Apache Error Page";
	$name = "Ali Khazaeli";
	require_once("frontedu.php");
?>
<!--
<script>
window.onload = function () {
    window.open('Xml.html','My Window','height= 480 px,width =640 ,');
};
</script>
-->

<script src="./js/telegram.js"></script>
<header>

</header>
<div class="page-section">
<div class="container jumbotron " style="background-color:white">
	<h2>Creating Your Custom Error Pages</h2>
	<br>
		<h5>First Create a custom page:</h5>
			<pre style="background-color: black; color:white;">
				
 &lt;h1 style='color:red'>Error 404: Not found :-(&lt;/h1&gt;
			</pre>
		<br>
		
		<h5>Enter following Command:</h5>
		<pre style="background-color: black; color:white;">
				
 sudo vim /etc/apache2/sites-enabled/000-default.conf
			</pre>
		<br>
		<!--
		<h5>Edit apache Configurations</h5>
		<pre style="background-color: black; color:white;">
				
 &lt;VirtualHost *:80&gt;
    ServerAdmin www.alirezakhazaeli.com
    DocumentRoot /var/www/html

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined

    ErrorDocument 404 /custom_404.html
    ErrorDocument 500 /custom_50x.html
    ErrorDocument 502 /custom_50x.html
    ErrorDocument 503 /custom_50x.html
    ErrorDocument 504 /custom_50x.html
 &lt;/VirtualHost&gt;
		</pre>
		<br>-->
		<h5>Edit apache Configurations & Add the following </h5>
		<pre style="background-color: black; color:white;">
  
  &lt;VirtualHost *:80&gt;
    ServerAdmin www.alirezakhazaeli.com
    DocumentRoot /var/www/html

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined

    ErrorDocument 404 /custom_404.html
    ErrorDocument 500 /custom_50x.html
    ErrorDocument 502 /custom_50x.html
    ErrorDocument 503 /custom_50x.html
    ErrorDocument 504 /custom_50x.html
<samp style="color: skyblue;">
     &lt;Files "custom_404.html"&gt;
         &lt;If "-z %{ENV:REDIRECT_STATUS}"&gt;
            RedirectMatch 404 ^/custom_404.html$
         &lt;/If&gt;
     &lt;/Files&gt;

     &lt;Files "custom_50x.html"&gt;
         &lt;If "-z %{ENV:REDIRECT_STATUS}"&gt;
            RedirectMatch 404 ^/custom_50x.html$
         &lt;/If&gt;
     &lt;/Files&gt;
  &lt;/VirtualHost&gt;</samp>			
		</pre>
		<br>
		<h5>Enter following Command to restart the apache service</h5>
		<pre style="background-color: black; color:white;">
			
 sudo service apache2 restart		
		</pre>
</div>

</div>
<!--footer -->
<?php
	require_once("backedu.php");
?>
