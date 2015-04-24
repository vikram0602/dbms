<?php die(); ?>
<?php include("noside.php"); ?>
<?php include_once("config.php"); ?>

<h2>Add Associated Station</h2><br>
<form role="form" action="add_assoc_station.php" method="post">
<input type="text" class="form-control" name="city" placeholder="Enter city, state, zip code, or other location information..." ><br>
<input type="submit" value="Search For Station">
</form><br>

<form   action="pre_add.php" method="post" id="form2">
Latitude: <input type="text" id="lat1" name="lat1"></br>
Longitude: <input type="text" id="lng1" name="lng1" value=""> </br>
<input type="submit" value="Add to Association List">
</form>

<h4>Currently Associated Stations:</h4>

<?php //Handle form submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST['city'])) {
		echo "<p>City Located:</p>";
		echo "<p id='abc' >".$_POST['city']."</p>";
	} else {
		echo "<p>No city selected.</p>";
		echo "<p id='abc' ></p>";
	}
}

?>

<?php //Print stations from the current association list
$anyStations = false;
foreach ($_SESSION['assoc_list'] as $station) {
	echo "$station<br>";
	$anyStations = true;
}
if (!$anyStations) {
	echo "<p>No associated stations (yet!)</p>";
}
?>

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

<form   action="drop_assoc.php" method="post" id="form3">
<input type="submit" value="Disband All Associations">
</form>
