<?php

include('../config.php');
require_once('jpgraph.php');
require_once('jpgraph_line.php');

//Parameters
if (isset($_GET["month_from"]))
	$mf=$_GET["month_from"];
if (isset($_GET["year_from"]))
	$yf=$_GET["year_from"];
if (isset($_GET["month_to"]))
	$mt=$_GET["month_to"];
if (isset($_GET["year_to"]))
	$yt=$_GET["year_to"];
if (isset($_GET["station_id"]))
	$station_id = $_GET["station_id"];
if (isset($_GET["ms"]))
	$ms = $_GET["ms"];
if (isset($_GET["predict_years"]))
	$predict_years = $_GET["predict_years"];
if(!isset($mf) or $mf=='aa' or $mf== NULL)
	$mf="01";
if(!isset($yf) or $yf=='aa' or $yf== NULL)
	$yf=2004;
if(!isset($mt) or $mt=='aa' or $mt== NULL)
	$mt=12;
if(!isset($yt) or $yt=='aa' or $yt== NULL)
	$yt=2014;
if(!isset($ms) or $ms=='aa' or $ms== NULL or $ms=="") {
	$ms="01";
}
if(!isset($predict_years) or $predict_years=='aa' or $predict_years== NULL or $predict_years=="") {
	$predict_years=5;
}
if(!isset($station_id) or $station_id=="") {
	$station_id = 722060;
}

if (strlen((string)$ms)==1) {
	$ms = (string)$ms;
	$ms = "0".$ms;
}

//DB
$temp_agg_b="SELECT avg(rainfall) as tmp,to_char(time_stamp,'YYYY') as dte from climate_data where to_char(time_stamp,'MM')='$ms' and station_id=:station_id and time_stamp between TO_DATE ('$yf/$mf/01', 'yyyy/mm/dd') AND TO_DATE ('$yt/$mt/28', 'yyyy/mm/dd') group by TO_CHAR(time_stamp,'YYYY') order by dte asc";
$temp_agg_s = oci_parse($conn,$temp_agg_b);
oci_bind_by_name($temp_agg_s,":station_id",$station_id);
oci_execute($temp_agg_s);

//Graph setup
$temp_dates = array();
$temp_temps = array();
while (($row = oci_fetch_array($temp_agg_s,OCI_BOTH)) != false) {
  array_push($temp_temps,round($row[0],4));
  array_push($temp_dates,(int)$row[1]);
}

//Prediction
$total_changes = 0;
$position = 0;
foreach ($temp_temps as $temperature) {
	$position += 1;
	if ($position==1) {
		$last_temperature = $temperature;
		continue;
	}
	$total_changes += $temperature - $last_temperature;
	$last_temperature = $temperature;
}
$total_changes /= count($temp_dates);
$last_date = end($temp_dates);
$running_temperature = end($temp_temps);
for ($i = $last_date+1;$i<=$last_date+$predict_years+1;$i+=1) {
	array_push($temp_dates,$i);
	$running_temperature += $total_changes;
	array_push($temp_temps,$running_temperature);
}

$graph = new Graph(600,600);
$graph->SetScale("textlin");
$theme_class=new UniversalTheme;
$graph->SetTheme($theme_class);
$graph->title->Set("Rainfall Prediction For The Selected Month ($ms)");
$graph->SetBox(true);

$graph->yaxis->HideZeroLabel();
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);
$graph->xgrid->Show();
$graph->xgrid->SetLineStyle("solid");
$graph->xgrid->SetColor('#E3E3E3');
$graph->xaxis->scale->ticks->Set(1);
$graph->xaxis->SetTickLabels($temp_dates);
$graph->xaxis->title->Set("Monthly Index                                                                         ");

$p1 = new LinePlot($temp_temps);
$graph->Add($p1);
$p1->SetFillGradient('darkblue','lightblue');
$p1->SetStepStyle();
$p1->SetColor("#6495ED");
$p1->SetLegend('Predicted Rainfall Rates');
$graph->legend->SetFrameWeight(1);

/*var_dump($temp_temps);
var_dump($temp_dates);
die();*/

$graph->Stroke(); //Draw graph

oci_free_statement($temp_agg_s);
oci_close($conn);

?>