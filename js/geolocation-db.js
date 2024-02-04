//https://geolocation-db.com/documentation
    var latitude = document.getElementById('latitude');
    var longitude = document.getElementById('longitude');

    function callback(data)
    {
        latitude.innerHTML = data.latitude;
        longitude.innerHTML = data.longitude;
    }
    
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'https://geolocation-db.com/jsonp/0f761a30-fe14-11e9-b59f-e53803842572';
    var h = document.getElementsByTagName('script')[0];
    h.parentNode.insertBefore(script, h);
