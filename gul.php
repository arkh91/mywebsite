<?php
/*  author: Ali Khazaeli
    date: 03/12/2020
*/

	$page_title = "UserLocation";
	$name = "Ali Khazaeli";
	require_once("front.php");

?>
<div class="page-section">
<div class="container jumbotron " style="background-color:white">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <h1> Your Location:</h1><br>

			<p class="mb-0">City: <b><span id="city"></span></b></p>
			<p class="mb-0">State: <b><span id="state"></span></b></p>
			<p class="mb-0">Country: <b><span id="country"></span></b></p>
			<p class="mb-0">Latitude: <b><span id="latitude"></span></b></p>
			<p class="mb-0">Longitude: <b><span id="longitude"></span></b></p>
        <br>

    </div>
    
	<!--Get user Geolocation -->
  <script src="./js/geolocation-db.js"></script>
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
  <script src="./ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</div>
<!--footer -->
<?php
	require_once("back.php");
?>
