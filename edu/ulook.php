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
	require_once("../dbinfo1.inc");
	$page_title = "User Look Up";
	$name = "Ali Khazaeli";
	//require_once("frontedu.php");
	//require_once("scripts/showuser.php");

?>

<header>

<div class="page-section">
	<div class="container jumbotron " style="background-color:white">
		
		
		<h1>Please Enter Your Discord ID: </h1>
	<div class="hide">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
  			<div class="input-group">		
    				<input type="text" name="discord" class="form-control" placeholder="What is your discord ID?">
    					<div class="input-group-append">
      						<button class="btn btn-secondary" type="submit" name="report" class="btn2">
        						<div> <i class="fa fa-search" ></i> </div>
      						</button>
    					</div>
  			</div>
		</form>
		</div>
<!-- <p id="flip">Click here</p> -->
		
<!-- sliding js -->
<script src="../ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script> 
$(document).ready(function(){
  	$("#flip").click(function(){
    		$("#panel").hide("slow");
  	});
  	$(".btn2").click(function(){
		$(".hide").hide();
	});
});
</script>


<?php
echo "<br>";
if(isset($_POST['discord'])){
 		 
	 $username = $_POST['discord'];
	 //echo $username . "<br>";
	 //$last_name = $_POST['last_name'];
	 //$city_name = $_POST['city_name'];
	 //$email = $_POST['email'];

	$m = "SELECT * FROM 11102020messages WHERE username = '$username'";
	$v = "SELECT * FROM 11102020voice WHERE username = '$username'";
	 //$sql = "INSERT INTO employee (first_name,last_name,city_name,email)
	 //VALUES ('$first_name','$last_name','$city_name','$email')";
	 //echo $m . "<br>";
	 //echo $v . "<br>";
	$resultm = $conn->query($m);
	$resultv = $conn->query($v);
	
	if ($resultm->num_rows > 0) {
		echo "<table class='table table-striped'>
        <tr>
        <th>Username</th>
        <th>Text</th>
        <th>Voice(min)</th>
        </tr>";
	     // output data of each row
		while($row = $resultm->fetch_assoc()) {
			//echo "Soldier: " . $row["username"]. " ----->   Min: " . $row["min"]."<br>";
			//echo $row["username"] . "\t" . " TXT: " .$row["txt"]."<br>";
			echo "<tr>";
       		echo "<td>" . $row['username'] . "</td>";
			echo "<td>" . $row['txt'] . "</td>";
        	
        	while($row = $resultv->fetch_assoc()) {
				echo "<td>" . $row['min'] . "</td>";
				echo "</tr>";
			}
		}	
		echo "</table>";
	
	}else{
		echo "There is no Data available!";
	}
        $conn->close();
}
?>

<h6> <i>Updated on <?php echo date("m/d/Y") ?> </i></h6>

<div class="input-group-append">
      						<button class="btn btn-secondary" type="submit" name="report" class="btn2">
        						<div> <i class="fa fa-search" ></i> </div>
      						</button>
    					</div>

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
