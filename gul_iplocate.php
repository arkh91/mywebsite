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
		<div style="padding-left:10%;">
			<?php
				/*
				$res = file_get_contents('https://www.iplocate.io/api/lookup/');
				$res = json_decode($res);

				echo "Time_zone: ";
				echo $res->time_zone; 
				echo "<br>";

				echo "City: ";
				echo $res->city; 
				echo "<br>";

				echo "State: ";
				echo $res->subdivision; 
				echo "<br>";

				echo "Postal_code: ";
				echo $res->postal_code; 
				echo "<br>";

				echo "Country: ";
				echo $res->country; // United States
				echo "<br>";

				echo "Continent: ";
				echo $res->continent; // North America
				echo "<br>";

				echo "Latitude: ";
				echo $res->latitude; // 37.751
				echo "<br>";

				echo "Longitude: ";
				echo $res->longitude; // -97.822

				*/
			?>

			<?php
				/*
				 * https://stackoverflow.com/questions/409999/getting-the-location-from-an-ip-address/47297767#47297767
				 * ipinfo.io
				 */
				$ip = $_SERVER['REMOTE_ADDR'];
				//echo "$ip";
				$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json?token=c1379bcb72b45e"));
				
				echo "Time_zone: " . $details->timezone . "<br>";
				echo "City: " .  $details->city . "<br>";
				echo "State: " . $details->region . "<br>";
				echo "Postal_code: " . $details->postal . "<br>";
				echo "Country: " . $details->country . "<br>";
				//echo "Location: " . $details->loc . "<br>";
				
				$str_arr = explode (",", $details->loc);
				//print_r($str_arr);
				echo "Latitude: " . $str_arr[0] ."<br>";
				echo "Longitude: " . $str_arr[1] . "<br>";
				echo "<br>";
				//echo $str_arr[1];
			?>
		</div>
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
