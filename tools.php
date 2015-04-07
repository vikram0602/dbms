<?php include("template.php"); ?>

<h1> Filter Tools </h1>

<h1> Aggregate Tools </h1>

<form action="agg_temperature.php" method="get">
<input type="hidden" name="station_id" value="<?php echo $_GET["station_id"]; ?>">
</form>

<h1> Prediction Tools </h1>

<?php include("footer.html"); ?>