<!DOCTYPE html>
<html lang="en-ca">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contact</title>
        <meta name="description" content="Contact us">
        <link rel="stylesheet" href=<?php echo $css_file; ?>>   <!-- ../css/index-project.css  -->
        <link rel="stylesheet" href=<?php echo $css_file2; ?>>    <!-- ../css/project-main.css  -->
    </head>
    <body>
        
<div class="navbar" id="myTopnav">
  <a href="../index.html">Home</a>    
    <div class="dropdown">
    <button class="dropbtn">Linux 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="./main.html">SSH Key</a>
        <a class="active" href="#">New User</a>
        <a href="#">Link 3</a>
    </div>
  </div>     
     <a href="./info.html">About</a>
     <a href="./contact.html">Contact</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    
</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
}
</script>
