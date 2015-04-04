<?php include("template.html"); ?>

<h1> Welcome, Visitor! </h1>
<p> You are viewing the visitor page for station number 

<?php //Intro message
if (!empty($_GET['station_id'])) {
  $station_id = (string)$_GET[$station_id];
} else {
  $station_id = "722060";
}
echo $station_id;
?>
.</p>

<?php
include("config.php");

if (!$conn)
  die("<p>Cannot connect to database</p>");

?>

<?php include("footer.html"); ?>