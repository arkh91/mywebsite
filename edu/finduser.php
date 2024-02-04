<!DOCTYPE html>
<html lang="en">

<head>
  <!--Google Adsense -->
  <script data-ad-client="ca-pub-1348223464760566" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <!--<meta charset="utf-8">
  <meta property="og:locale" content="fa_IR" >-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>

  <!-- Custom fonts for this theme -->
  <link href="./vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <!-- Anime -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />
  <!-- Theme CSS -->
  <link href="../css/freelancer.min.css" rel="stylesheet">
  <!--B/W images -->
  <link href="../css/styles.css" rel="stylesheet">
  <!-- edu folder -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../css/freelancer.min.css" rel="stylesheet">
  <link href="../css/styles.css" rel="stylesheet">


<style> 
#panel, #flip {
  padding: 5px;
  text-align: center;
  background-color: white;
  
}

#panel {
  padding: 50px;
  display: none;
}
</style>
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="../index.php">DISTRACTY</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../index.php#portfolio">Services</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../index.php#about">About</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../contactform.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<?php
	/* author: Ali Khazaeli
	  date: 03/12/2020
	*/
	//require_once("../dbinfo.inc");
	$page_title = "User Look Up";
	$name = "Ali Khazaeli";
	//require_once("frontedu.php");
	//require_once("scripts/showuser.php");
/*
	$nameErr = $emailErr = $genderErr = $websiteErr = "";
	$name = $email = $gender = $comment = $website = "";




$mysqli = new mysqli("localhost", "hatef", "Seddigheh20!", "cod");

// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

if(isset($_POST['save']))
{
	 $first_name = $_POST['first_name'];

// Escape user inputs for security
$discord = $mysqli->real_escape_string($_REQUEST['submit']);
//$last_name = $mysqli->real_escape_string($_REQUEST['last_name']);
//$email = $mysqli->real_escape_string($_REQUEST['email']);
//

// Attempt insert query execution
$record = "SELECT * FROM user WHERE discord_id = $discord";
//$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
/*
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}




if ($_SERVER["REQUEST_METHOD"] == "POST") {
  	if (empty($_POST["discord"])) {
    		$nameErr = "Name is required";
  	} else {
    		$name = test_input($_POST["discord"]);
    	// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z-' ]*$/",$discord)) {
      		$nameErr = "Only letters and white space allowed";
		}
 	}
}
echo $discord . "<br>";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 */
?>

<header>

<div class="page-section">
	<div class="container jumbotron " style="background-color:white">
		<h1>Please Enter Your Discord ID: </h1>
		<form method="post" action="./finduserscript.php">
  			<div class="input-group">		
    				<input type="text" name="discord" class="form-control" placeholder="What is your discord ID?">
    					<div class="input-group-append">
      						<button class="btn btn-secondary" type="submit" name="report">
        						<div id"flip"> <i class="fa fa-search"></i> </div>
      						</button>
    					</div>
  			</div>
		</form>
<!-- sliding js -->
<script src="../ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script> 
$(document).ready(function(){
  	$("#flip").click(function(){
    		$("#panel").slideToggle("slow");
  	});
});
</script>

<!--
<div id="flip">Click to slide down panel</div>
<div id="panel">Hello world!</div>
-->



<!-- </form>  -->
	</div>
</div>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Status</h4>
          <p class="lead mb-0">We are active!
            <br>24/7 Text or email!</p>
        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Around the Web</h4>
      <!--<a class="btn btn-outline-light btn-social mx-1" href="http://instagram.com/_u/arkh1991/">-->
		  <a class="btn btn-outline-light btn-social mx-1" href="http://instagram.com/_u/agfhgfhgjgjhg/">
            <i class="fab fa-fw fa-instagram"></i>
	  </a>

	<a class="btn btn-outline-light btn-social mx-1" href="https://e.widgetbot.io/channels/741384112455286806/774040521014247455">
		<i class="fab fa-fw fa-discord"></i>
	</a>

          <a class="btn btn-outline-light btn-social mx-1" href="tg://resolve?domain=distracty">
	    
		<i class="fab fa-fw fa-telegram"></i>
          </a>
 
 <a class="btn btn-outline-light btn-social mx-1" href="https://api.whatsapp.com/send?phone=+17784041575">
                <i class="fab fa-fw fa-whatsapp"></i>
        </a>
	  <!--
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-linkedin-in"></i>
          </a>
          
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-dribbble"></i>
          </a>
          -->
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">About Distracty</h4>
          <p class="lead mb-0">Distracty is bringing lower prices for <i>YOU</i>.</p>
        </div>

      </div>
    </div>
  </footer>

  <!-- Copyright Section -->
  
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <h6><small>Copyright &copy;2020 </small></h6>
    </div>
  </section>
  
  <!--edu folder																	-->
   <!--Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  
  <!-- Plugin JavaScript--> 
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Contact Form JavaScript -->
  <script src="../js/jqBootstrapValidation.js"></script>
  <script src="../js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../js/freelancer.min.js"></script> 
  
  <!-- Get User OS -->
  <script src="../js/getUserOS.js"></script> 
  
  <!-- Show Telegram Download Page -->
  <script src="../js/telegram_page.js"></script> 
  
  <!--Get user IP -->
  <script src="../js/getUserIP.js"></script> 
  
  <!--Get user Geolocation -->
  <script src="../js/geolocation-db.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  
</body>

</html>
