//  alert('hello world');

$.getJSON('http://ip-api.com/json?callback=?', function(data) {
  console.log(JSON.stringify(data, null, 2));
});

$(document).ready(function(){
 $("#msgid").html("This is Hello World by JQuery");
});
