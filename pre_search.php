<?php
include("noside.php");
$city=$_POST["city"];
if($city==null)
	header('Location: index.php');
echo "<p>City Located:</p>";
echo "<p id='abc' >".$city."</p>";

?>
	
<form   action="search.php" method="get" id="form2">
Latitude: <input type="text" id="lat1" name="lat1"></br>
Longitude: <input type="text" id="lng1" name="lng1" value="aa"> </br>
<input type="hidden" id="humidity" name="humidity" value='aa'> </br>
<input type="hidden" id="wind" name="wind" value='aa'> </br>
<input type="hidden" id="temperature" name="temperature" value='aa'> </br>

<input type="submit" value="Click To Continue">
</form>
	   
 <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
    <script>
        function initialize() {
        var address = document.getElementById("abc").innerHTML;
            geocoder = new google.maps.Geocoder();
            geocoder.geocode({
            'address': address
            }, function(results, status) {      
				var lat1=document.getElementById("lat1").value=results[0].geometry.location.lat();
                var lng1=document.getElementById("lng1").value=results[0].geometry.location.lng();
            });
		}
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>	   
	  

</body>
</html>