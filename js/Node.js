//run `npm install request` in the root folder of your website to install request
var request = require("request");
var url = "https://geolocation-db.com/json";
var url = "https://geolocation-db.com/json/0f761a30-fe14-11e9-b59f-e53803842572";
request({
    url: url,
    json: true
}, function (error, response, body) {

    if (!error && response.statusCode === 200) {
        console.log(body); 
    }
});
