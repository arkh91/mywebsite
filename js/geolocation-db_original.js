
    
	var country = document.getElementById('country');
	var state = document.getElementById('state');
	var city = document.getElementById('city');
	var postal = document.getElementById('postal');
	var latitude = document.getElementById('latitude');
	var longitude = document.getElementById('longitude');
	//var ip = document.getElementById('ipv4');
               
	function callback(data)
	{
		country.innerHTML = data.country_name;
		state.innerHTML = data.state;
		city.innerHTML = data.city;
		//postal.innerHTML = data.postal;
		latitude.innerHTML = data.latitude;
		longitude.innerHTML = data.longitude;
		ip.innerHTML = data.IPv4;
	}

	var script = document.createElement('script');
	script.type = 'text/javascript';
	//script.src = 'https://geolocation-db.com/jsonp/0f761a30-fe14-11e9-b59f-e53803842572';
	script.src = 'https://geolocation-db.com/jsonp';
	var h = document.getElementsByTagName('script')[0];
	h.parentNode.insertBefore(script, h);
