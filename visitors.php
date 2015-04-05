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

//Prepare the statements
$maxTemp_s = oci_parse($conn,$maxTemp_b);
$minTemp_s = oci_parse($conn,$minTemp_b);
$avgTemp_s = oci_parse($conn,$avgTemp_b);
$maxHum_s = oci_parse($conn,$maxHum_b);
$minHum_s = oci_parse($conn,$minHum_b);
$avgHum_s = oci_parse($conn,$avgHum_b);
$maxPressure_s = oci_parse($conn,$maxPressure_b);
$minPressure_s = oci_parse($conn,$minPressure_b);
$avgPressure_s = oci_parse($conn,$avgPressure_b);
$maxWind_s = oci_parse($conn,$maxWind_b);
$minWind_s = oci_parse($conn,$minWind_b);
$avgWind_s = oci_parse($conn,$avgWind_b);
$maxRainfall_s = oci_parse($conn,$maxRainfall_b);
$minRainfall_s = oci_parse($conn,$minRainfall_b);
$avgRainfall_s = oci_parse($conn,$avgRainfall_b);

//Inject the station_id
oci_bind_by_name($maxTemp_s,":station_id",$station_id);
oci_bind_by_name($minTemp_s,":station_id",$station_id);
oci_bind_by_name($avgTemp_s,":station_id",$station_id);
oci_bind_by_name($maxHum_s,":station_id",$station_id);
oci_bind_by_name($minHum_s,":station_id",$station_id);
oci_bind_by_name($avgHum_s,":station_id",$station_id);
oci_bind_by_name($maxPressure_s,":station_id",$station_id);
oci_bind_by_name($minPressure_s,":station_id",$station_id);
oci_bind_by_name($avgPressure_s,":station_id",$station_id);
oci_bind_by_name($maxWind_s,":station_id",$station_id);
oci_bind_by_name($minWind_s,":station_id",$station_id);
oci_bind_by_name($avgWind_s,":station_id",$station_id);
oci_bind_by_name($maxRainfall_s,":station_id",$station_id);
oci_bind_by_name($minRainfall_s,":station_id",$station_id);
oci_bind_by_name($avgRainfall_s,":station_id",$station_id);

if (!$conn) {
  echo "<p>Cannot connect to database</p>";
} else {
  oci_execute($maxTemp_s);
  oci_execute($minTemp_s);
  oci_execute($avgTemp_s);
  oci_execute($maxHum_s);
  oci_execute($minHum_s);
  oci_execute($avgHum_s);
  oci_execute($maxPressure_s);
  oci_execute($minPressure_s);
  oci_execute($avgPressure_s);
  oci_execute($maxRainfall_s);
  oci_execute($minRainfall_s);
  oci_execute($avgRainfall_s);
  oci_execute($maxWind_s);
  oci_execute($minWind_s);
  oci_execute($avgWind_s);
}


//Free unused resources
oci_free_statement($maxTemp_s);
oci_free_statement($minTemp_s);
oci_free_statement($avgTemp_s);
oci_free_statement($maxHum_s);
oci_free_statement($minHum_s);
oci_free_statement($avgHum_s);
oci_free_statement($maxPressure_s);
oci_free_statement($minPressure_s);
oci_free_statement($avgPressure_s);
oci_free_statement($maxRainfall_s);
oci_free_statement($minRainfall_s);
oci_free_statement($avgRainfall_s);
oci_free_statement($maxWind_s);
oci_free_statement($minWind_s);
oci_free_statement($avgWind_s);
oci_close($conn);
?>

<?php include("footer.html"); ?>
