<?php
/*  author: Ali Khazaeli
    date: 04/12/2020
*/
	//require_once("dbinfo.inc");
	$page_title = "cod mobile";
	$name = "Arkh";
	require_once("frontedu.php");
?>
<header>

<script src="../../js/discord.js" async defer>
  new Crate({
    server: '741384112455286806', // Call of Duty (COD)
    channel: '774040521014247455' // #support
  })
</script>

</header>
<div class="page-section">
<div class="container jumbotron " style="background-color:white">
<!--
<p> Antique Galleria Use Cases:</p>
	<ul>
		<li><a href="showAntique.php">Search and View showAntique</a></li>
		<li><a href="showBylaws.php">Search and view Bylaws</a></li>
        <li><a href="insertBook.php">Document Antique</a></li>
        <li><a href="login.php">Create Trade Interest</a></li>
        <li><a href="logout.php">Make trade Offer</a></li>
        <li><a href="logout.php">Apply for Mall Block</a></li>
	</ul>
-->	

	<div class="container">
  <h1>How to run cod mobile:</h1><br>

  <p>In this tutorial we are going to explain how to sign up and run cod mobile on your phone.</p><br>
  <p>This page has following information.</p>
  <ul>
	<li>Signing up for cod.</li>
	<li>Download cod mobile.</li>
	<li>Run cod mobile</li>
  </ul>
  <br>
  <!--
  <div class="row">
    <div class="col-lg-3 col-md-4 col-6 "><a href="./contactform.php"><img class="img-thumbnail img-fluid animated bounce" src="./img/$100USD.jpg" alt=""></a>
    <br><br>
    <h6><b> $100 </b>PlayStation Gift Card </h6><br>
    </div>
  </div>
  -->
  <h2>Signing up:</h2>
  <p>If you dont have cod account, we strongly <b>recommend</b> to create one. In this case if you lose your device or potentially anything happens to your device, you still can retrieve your data back.</p>
  <p>for this matter follow the following instructions. </p>
  <ol>
	<li> Go to <a href='https://profile.callofduty.com/cod/signup' style=color:blue;>cod website</a> Enter a valid email address and press <i>Sign Up</i></li>
	
  </ol>
  
  <div style="padding-left:2%">
	<img src="../img/cod/cod-profile.png" class="img-fluid img-thumbnail text-center" width="681" alt="cod signing up page">
  </div>
  <br>
  <ol start="2">
	<li>Create an Activision ID (username), Firstname and Lastname and press <b>Next</b>.</li>
  </ol>
  
  <div style="padding-left:2%">
	<img src="../img/cod/cod-username.png" class="img-fluid img-thumbnail text-center" alt="credential creation page">
  </div>
  <br>
  
  <ol start="3">
	<li>Enter your date of birth and choose your location and press <b>Next</b>.</li>
  </ol>
  <div style="padding-left:2%">
	<img src="../img/cod/cod-location.png" class="img-fluid img-thumbnail text-center" alt="credential creation page">
  </div>
  <br>
  
  <ol start="4">
	<li>Create a password containg characters and numbers.</li>
	
	<p>You can check the first checkbox to receive news. (<i>optional</i>).</p>
    <p>You have to check the second chechbox to agree with <i>Term Of Use</i> then press <b>Next</b>.</p>
  </ol>
  
  <div style="padding-left:2%">
	<img src="../img/cod/cod-password.png" class="img-fluid img-thumbnail text-center" alt="credential creation page">
  </div>
  <br>
  
  <ol start="5">
	<li>Your account has been successfully created!</li>
  </ol>
  
  <div style="padding-left:2%">
	<img src="../img/cod/cod-completed.png" class="img-fluid img-thumbnail text-center" alt="credential creation page">
  </div>
  <br>
  
  <h2>Download COD:</h2>
  <p>There are 2 ways to install COD on your device.</p>
  <ol>
	<li>The first way which is the easiest way is connecting to <i>Play Store</i> or <i>App Store</i> to download and install automatically.</li>
  </ol>
  <div style="padding-left:10%;">
   <button class="btn btn-xl btn-primary btn-outline-light" onclick="DetectAndServeCOD()" type="submit">Download COD!</button>
        <div id="dialog-confirm"></div>
  </div>
  <br>
  <ol start="2">
	<li>The second way is to download seperately for <b><i>Android</i></b> users.
		<ul>
			<li>2 files need to be downloaded.</li>
			<ol>
				<li>Download apk from <a href='https://www.dl.farsroid.com/game/Call-of-Duty-Mobile-1.0.12(www.Farsroid.com).apk' style="color:blue;"> here</a> and install it.</li>
				<li>Download COD data from <a href='https://www.dl.farsroid.com/game/Call-of-Duty-Mobile-1.0.12(www.Farsroid.com).zip' style="color:blue;"> here</a></li>
			</ol>
			<li>Extract the data and move to <b>Android/obb</b>.</li>
			<li>Run the game!</li>
		</ul>
	</li>
  </ol>




  <p>This page has been viewed: <b><button class="btn btn-xl btn-primary btn-outline-light"><span id="CounterVisitor"></span></button></b></p>

<script>
/*https://stackoverflow.com/questions/47428504/javascript-count-number-of-visitor-for-website*/
var n = localStorage.getItem('on_load_counter');
	if (n === null) {
		n = 0;
	}
n++;

localStorage.setItem("on_load_counter", n);

nums = n.toString().split('').map(Number);
document.getElementById('CounterVisitor').innerHTML = '';
for (var i of nums) {
	document.getElementById('CounterVisitor').innerHTML += '<span class="counter-item">' + i + '</span>';
}

</script>
  
  <!--COD download page -->
  <script src="../js/cod_page.js"></script>
  
</div>
	
</div>
</div>


<!--footer -->
<?php
	require_once("backedu.php");
?>
