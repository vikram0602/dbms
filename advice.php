<?php //Advice
if(count(get_included_files()) ==1) exit("Direct access not permitted.");

include('config.php');

if (!conn) {
	echo "<p>Failed to connect to database</p>";
} else {
	$b = "select avg(temperature),avg(humidity),avg(rainfall) from climate_data where station_id=$station_id";
$stid = oci_parse($conn,$b);
oci_execute($stid);
$row = oci_fetch_array($stid, OCI_BOTH);
oci_free_statement($stid);
$tv = round($row[0],4);
$hv = round($row[1],4);
$rv = round($row[2],4)*100;
	echo "<h4>Automated Climatic Analyizer Output</h4>";
	$b = "select s from advice where $tv <= th and $tv >= tl and $rv <= rh and $rv >= rl and $hv <= hh and $hv >= hl";
	$stid = oci_parse($conn,$b);
	oci_execute($stid);
    $was_advice = false;
    while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
    	echo "Advice computed: $row[0]<br>";
    	$was_advice = true;
    }
    if (!$was_advice) {
    	echo "Advice computed: No advice determined for this environment.<br>";
    }
    oci_free_statement($stid);
    oci_close($conn);
}

?>
