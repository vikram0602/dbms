<?php include("template.php"); ?>

<h1> Filtering Operations </h1>
<form action="ashish_tool.php" method="get">
<input type="hidden" name="station_id" value="<?php echo $_GET["station_id"]; ?>">
<input type="submit" style="width:500px" value="Temperature Preview Tool">
</form>
<form action="ashish_tool1.php" method="get">
<input type="hidden" name="station_id" value="<?php echo $_GET["station_id"]; ?>">
<input type="submit" style="width:500px" value="Pressure Preview Tool">
</form>
<form action="ashish_tool2.php" method="get">
<input type="hidden" name="station_id" value="<?php echo $_GET["station_id"]; ?>">
<input type="submit" style="width:500px" value="Humidity Preview Tool">
</form>
<form action="ashish_tool3.php" method="get">
<input type="hidden" name="station_id" value="<?php echo $_GET["station_id"]; ?>">
<input type="submit" style="width:500px" value="Wind Speed Preview Tool">
</form>
<form action="ashish_tool4.php" method="get">
<input type="hidden" name="station_id" value="<?php echo $_GET["station_id"]; ?>">
<input type="submit" style="width:500px" value="Rainfall Preview Tool">
</form><br>


<h1> Aggregation and Analysis </h1>

<form action="agg_temperature.php" method="get">
<input type="hidden" name="station_id" value="<?php echo $_GET["station_id"]; ?>">
<input type="submit" style="width:500px" value="Aggregate Temperature Tool">
</form>
<form action="agg_humidity.php" method="get">
<input type="hidden" name="station_id" value="<?php echo $_GET["station_id"]; ?>">
<input type="submit" style="width:500px" value="Aggregate Humidity Tool">
</form>
<form action="agg_rainfall.php" method="get">
<input type="hidden" name="station_id" value="<?php echo $_GET["station_id"]; ?>">
<input type="submit" style="width:500px" value="Aggregate Rainfall Tool">
</form>
<form action="agg_pressure.php" method="get">
<input type="hidden" name="station_id" value="<?php echo $_GET["station_id"]; ?>">
<input type="submit" style="width:500px" value="Aggregate Pressure Tool">
</form>
<form action="agg_wind.php" method="get">
<input type="hidden" name="station_id" value="<?php echo $_GET["station_id"]; ?>">
<input type="submit" style="width:500px" value="Aggregate Wind Tool">
</form>

<h1> Climate Prediction </h1>

<form action="predict_temperature.php" method="get">
<input type="hidden" name="station_id" value="<?php echo $_GET["station_id"]; ?>">
<input type="submit" style="width:500px" value="Temperature Prediction Tool">
</form>
<form action="predict_humidity.php" method="get">
<input type="hidden" name="station_id" value="<?php echo $_GET["station_id"]; ?>">
<input type="submit" style="width:500px" value="Humidity Prediction Tool">
</form>
<form action="predict_rainfall.php" method="get">
<input type="hidden" name="station_id" value="<?php echo $_GET["station_id"]; ?>">
<input type="submit" style="width:500px" value="Rainfall Prediction Tool">
</form>
<form action="predict_wind.php" method="get">
<input type="hidden" name="station_id" value="<?php echo $_GET["station_id"]; ?>">
<input type="submit" style="width:500px" value="Wind Prediction Tool">
</form>

<?php include("footer.html"); ?>