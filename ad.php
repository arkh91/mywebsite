<?php
/*  author: Ali Khazaeli
    date: 04/24/2020
*/

	$page_title = "Ad";
	$name = "Ali Khazaeli";
	require_once("front_ad.php");

?>
<header>
<div style="margin-top:12%">

</div>
</header>
<div class="mainContainer text-left jumbotron" style="background-color:white">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<div class="container">

		<p>Hi This is only an Ad!</p>

		<button onclick="openWin()">Open w3schools.com in a new window</button>
		<button onclick="closeWin()">Close the new window (w3schools.com)</button>

		  <input type=submit value="ALL ON" onclick="allOn();" />


  <script type="text/javascript">
    function allOn(){
    var myWindow = window.open('http://www.alirezakhazaeli.com','1366002941508','width=600,height=400,left=5,top=3')
    setTimeout(function() { myWindow.close();}, 1000);
    
    var myWindow2 = window.open('http://www.alirezakhazaeli.com/edu/cod.php','1366002941508','width=600,height=400,left=5,top=3')
    setTimeout(function() { myWindow.close();}, 2000);
    }
  </script>


		<script>
		var myWindow;

		function openWin() {
		  myWindow = window.open("http://www.alirezakhazaeli.com", "_blank", "width=500, height=500");
		}

		function closeWin() {
		  myWindow.close();
		}
		</script>



		<script type="text/javascript">
		function load()
		{
		//window.open('http://www.google.com','_blank');
		//window.open('http://www.yahoo.com','_blank');


		}
		</script>

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
