/* Add "https://api.ipify.org?format=json" statement 
           this will communicate with the ipify servers in 
           order to retrieve the IP address $.getJSON will 
           load JSON-encoded data from the server using a 
           GET HTTP request 
  https://www.geeksforgeeks.org/how-to-get-client-ip-address-using-javascript/
*/ 
        $.getJSON("https://api.ipify.org?format=json", 
                                          function(data) { 
  
            // Setting text of element P with id ip 
            $("#ip").html(data.ip); 
        }) 
