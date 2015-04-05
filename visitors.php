<?php include("template.php"); ?>
<?php include("config.php"); ?>

<h1> Welcome, Visitor! </h1>
<p> You are viewing the visitor page for station number 

<?php //Intro message
if (!empty($_GET['station_id'])) {
  $station_id = (string)$_GET[$station_id];
} else {
  $station_id = "722060"; //Gainesville
}
echo $station_id;
?>
.</p>

<h1> Station Summary </h1>

<?php
include("config.php");

//Queries
$maxTemp_b="SELECT max(temperature) from climate_data where station_id=:station_id";
$minTemp_b="SELECT min(temperature) from climate_data where station_id=:station_id";
$avgTemp_b="SELECT avg(temperature) from climate_data where station_id=:station_id";
$maxHum_b="SELECT max(humidity) from climate_data where station_id=:station_id";
$minHum_b="SELECT min(humidity) from climate_data where station_id=:station_id";
$avgHum_b="SELECT avg(humidity) from climate_data where station_id=:station_id";
$maxPressure_b="SELECT max(pressure) from climate_data where station_id=:station_id";
$minPressure_b="SELECT min(pressure) from climate_data where station_id=:station_id";
$avgPressure_b="SELECT avg(pressure) from climate_data where station_id=:station_id";
$maxWind_b="SELECT max(wind_speed) from climate_data where station_id=:station_id";
$minWind_b="SELECT min(wind_speed) from climate_data where station_id=:station_id";
$avgWind_b="SELECT avg(wind_speed) from climate_data where station_id=:station_id";
$maxRainfall_b="SELECT max(rainfall) from climate_data where station_id=:station_id";
$minRainfall_b="SELECT min(rainfall) from climate_data where station_id=:station_id";
$avgRainfall_b="SELECT avg(rainfall) from climate_data where station_id=:station_id";

$maxTemp_s = oci_parse($conn,$maxTemp_b);
oci_bind_by_name($maxTemp_s,":station_id",$station_id);

if (!$conn) {
  echo ("<p>Cannot connect to database</p>");
} else {
  
}


//Free unused resources
oci_free_statement($maxTemp_s);
oci_close($conn);
?>

<?php include("footer.html"); ?>
