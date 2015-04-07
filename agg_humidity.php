<?php include("noside.php"); ?>
<?php include("config.php"); ?>

<h1> Welcome! </h1>
<p> You are viewing the aggregate humidity tool for station number 

<?php //Intro message
if (!empty($_GET['station_id'])) {
  $station_id = (string)$_GET["station_id"];
} else {
  $station_id = "722060"; //Gainesville
}
echo $station_id;
?>
.<h1> Station Summary for the Measurement Period</h1>

<?php

if (!$conn) {
  echo "<p>Cannot connect to database</p>";
} else {

  //Print results to the page
  echo "<img src=\"jpgraph/graph_humidity.php?station_id=$station_id\">";
} 

//Free unused resources
oci_close($conn);
?>

<?php include("footer.html"); ?>
