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
.<br>For more information, please <a href="index.php#login">sign in.</a></p>

<h1> Station Summary for the Measurement Period</h1>

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
  //Execute statements
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
  //Collect results
  $maxTemp_v = round(oci_fetch_array($maxTemp_s, OCI_BOTH)[0],2);
  $minTemp_v = round(oci_fetch_array($minTemp_s, OCI_BOTH)[0],2);
  $avgTemp_v = round(oci_fetch_array($avgTemp_s, OCI_BOTH)[0],2);
  $maxHum_v = round(oci_fetch_array($maxHum_s, OCI_BOTH)[0],2);
  $minHum_v = round(oci_fetch_array($minHum_s, OCI_BOTH)[0],2);
  $avgHum_v = round(oci_fetch_array($avgHum_s, OCI_BOTH)[0],2);
  $maxPressure_v = round(oci_fetch_array($maxPressure_s, OCI_BOTH)[0],2);
  $minPressure_v = round(oci_fetch_array($minPressure_s, OCI_BOTH)[0],2);
  $avgPressure_v = round(oci_fetch_array($avgPressure_s, OCI_BOTH)[0],2);
  $maxRainfall_v = round(oci_fetch_array($maxRainfall_s, OCI_BOTH)[0],2);
  $minRainfall_v = round(oci_fetch_array($minRainfall_s, OCI_BOTH)[0],2);
  $avgRainfall_v = round(oci_fetch_array($avgRainfall_s, OCI_BOTH)[0],2);
  $maxWind_v = round(oci_fetch_array($maxWind_s, OCI_BOTH)[0],2);
  $minWind_v = round(oci_fetch_array($minWind_s, OCI_BOTH)[0],2);
  $avgWind_v = round(oci_fetch_array($avgWind_s, OCI_BOTH)[0],2);
  //Print results to the page
  echo "<table style=\"width:85%\"><tr><td><u>Parameter</u></td><td><u>Value</u></td><td><u>Units</u></td></tr>";
  echo "<tr><td>Maximum Temperature</td><td>$maxTemp_v</td><td>Fahrenheit</td></tr>";
  echo "<tr><td>Average Temperature</td><td>$avgTemp_v</td><td>Fahrenheit</td></tr>";
  echo "<tr><td>Minimum Temperature</td><td>$minTemp_v</td><td>Fahrenheit</td></tr>";
  echo "<tr><td>Maximum Humidity</td><td>$maxHum_v</td><td>Dewpoint in Fahrenheit</td></tr>";
  echo "<tr><td>Average Humidity</td><td>$avgHum_v</td><td>Dewpoint in Fahrenheit</td></tr>";
  echo "<tr><td>Minimum Humidity</td><td>$minHum_v</td><td>Dewpoint in Fahrenheit</td></tr>";
  echo "<tr><td>Maximum Pressure</td><td>$maxPressure_v</td><td>Pressure in Millibars</td></tr>";
  echo "<tr><td>Average Pressure</td><td>$avgPressure_v</td><td>Pressure in Millibars</td></tr>";
  echo "<tr><td>Minimum Pressure</td><td>$minPressure_v</td><td>Pressure in Millibars</td></tr>";
  echo "<tr><td>Maximum Rainfall</td><td>$maxRainfall_v</td><td>Inches per Hour</td></tr>";
  echo "<tr><td>Average Rainfall</td><td>$avgRainfall_v</td><td>Inches per Hour</td></tr>";
  echo "<tr><td>Minimum Rainfall</td><td>$minRainfall_v</td><td>Inches per Hour</td></tr>";
  echo "<tr><td>Maximum Windspeed</td><td>$maxWind_v</td><td>Miles per Hour</td></tr>";
  echo "<tr><td>Average Windspeed</td><td>$avgWind_v</td><td>Miles per Hour</td></tr>";
  echo "<tr><td>Minimum Windspeed</td><td>$minWind_v</td><td>Miles per Hour</td></tr>";
  echo "</table>";
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
