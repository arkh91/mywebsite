<!DOCTYPE html>
<html>
<head>
    <title>Geolocation DB </title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
    <div>City: <span id="city"></span><br>
    <div>Latitude: <span id="latitude"></span><br>
    <div>Longitude: <span id="longitude"></span><br>
    <script>
	$.ajax({
		//Geolocation API
		url: "https://geolocation-db.com/jsonp/0f761a30-fe14-11e9-b59f-e53803842572",
		jsonpCallback: "callback",
		dataType: "jsonp",
		success: function( location ) {
			$('#city').html(location.city);
			$('#latitude').html(location.latitude);
			$('#longitude').html(location.longitude);
		}
	});		
    </script>
    
    <p> php starts here: </p> <br>
    <?php
    //Geolocation API
    $jsonp = file_get_contents('https://geolocation-db.com/json/0f761a30-fe14-11e9-b59f-e53803842572');
    $data = json_decode($jsonp);
    print $data->city . '<br>';
    print $data->latitude . '<br>';
    print $data->longitude . '<br>';
?>
</body>
</html>
