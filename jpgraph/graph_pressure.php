<?php 

include('../config.php');
require_once('jpgraph.php');
require_once('jpgraph_line.php');

//Parameters
if (isset($_GET["month_from"]))
	$mf=(int)$_GET["month_from"];
if (isset($_GET["year_from"]))
	$yf=(int)$_GET["year_from"];
if (isset($_GET["month_to"]))
	$mt=(int)$_GET["month_to"];
if (isset($_GET["year_to"]))
	$yt=(int)$_GET["year_to"];
if(!isset($mf) or $mf=='aa' or $mf== NULL)
	$mf=01;
if(!isset($yf) or $yf=='aa' or $yf== NULL)
	$yf=2004;
if(!isset($mt) or $mt=='aa' or $mt== NULL)
	$mt=12;
if(!isset($yt) or $yt=='aa' or $yt== NULL)
	$yt=2014;

//DB
$station_id = (string)$_GET["station_id"];
$temp_agg_b="SELECT avg(pressure) as tmp,to_char(time_stamp,'MM') as dte from climate_data where station_id=:station_id and time_stamp between TO_DATE ('$yf/$mf/01', 'yyyy/mm/dd') AND TO_DATE ('$yt/$mt/28', 'yyyy/mm/dd') group by TO_CHAR(time_stamp,'MM') order by dte asc";
$temp_agg_s = oci_parse($conn,$temp_agg_b);
oci_bind_by_name($temp_agg_s,":station_id",$station_id);
oci_execute($temp_agg_s);

//Graph setup
$temp_dates = array();
$temp_temps = array();
while (($row = oci_fetch_array($temp_agg_s,OCI_BOTH)) != false) {
  array_push($temp_temps,$row[0]);
  array_push($temp_dates,(int)$row[1] - 1);
}

$graph = new Graph(600,600);
$graph->SetScale("textlin");
$theme_class=new UniversalTheme;
$graph->SetTheme($theme_class);
$graph->title->Set('Aggregate Atmospheric Pressure Year View');
$graph->SetBox(true);

$graph->yaxis->HideZeroLabel();
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);
$graph->xgrid->Show();
$graph->xgrid->SetLineStyle("solid");
$graph->xgrid->SetColor('#E3E3E3');
$graph->xaxis->scale->ticks->Set(1);
$graph->xaxis->title->Set("Monthly Index                                                                         ");
$graph->yaxis->title->Set("Pressure (HPa)");

$p1 = new LinePlot($temp_temps);
$graph->Add($p1);
$p1->SetFillGradient('black','white');
$p1->SetStepStyle();
$p1->SetColor("#6495ED");
$p1->SetLegend('Characteristic Atmospheric Pressure');
$graph->legend->SetFrameWeight(1);

$graph->Stroke(); //Draw graph

oci_free_statement($temp_agg_s);
oci_close($conn);

?>
