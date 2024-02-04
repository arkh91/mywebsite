//File: external.js

function myFunction() {


  var position;
  var x = event.currentTarget.style.backgroundColor;


   if(x == "red") {
      x = "white";
      position = 600;
      event.currentTarget.style.left = position + "px";
      
   } else if (x == "white") {
      x = "blue";
      position = 800;
      event.currentTarget.style.left = position + "px";

   } else if(x=="blue") {
      x = "red"; 
      position = 400;  
      event.currentTarget.style.left = position + "px";

   }
   
   event.currentTarget.style.backgroundColor = x;

}