<?php include("noside.php"); ?>
<?php include("config.php"); ?>

<?php
if (!isset($_SESSION["CurrentUserType"])) {
  header("Location:index.php");
  die();
}
?>

<h1> Welcome! </h1>
<p> You are viewing the aggregate wind speed tool for station number 

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
  echo "<img src=\"jpgraph/graph_wind.php?station_id=$station_id&width=600\">";  
} 

//Free unused resources
oci_close($conn);
?>

<?php include("footer.html"); ?>
