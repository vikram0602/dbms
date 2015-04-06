<?php

include('../config.php');
require_once('jpgraph.php');
require_once('jpgraph_line.php');

//Deny users who are not logged in
session_start();
if ((string)$_SESSION["CurrentUser"] == false) {
  die("<p>Access Denied</p>");
}

//DB
$station_id = (string)$_GET["station_id"];
$temp_agg_b="SELECT avg(wind_speed) as tmp,to_char(time_stamp,'MM') as dte from climate_data where station_id=:station_id group by TO_CHAR(time_stamp,'MM') order by dte asc";
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
$graph->title->Set('Aggregate Wind Speed Year View');
$graph->SetBox(true);

$graph->yaxis->HideZeroLabel();
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);
$graph->xgrid->Show();
$graph->xgrid->SetLineStyle("solid");
$graph->xgrid->SetColor('#E3E3E3');
$graph->xaxis->scale->ticks->Set(1);
$graph->xaxis->title->Set("Monthly Index                                                                         ");
$graph->yaxis->title->Set("Hourly Wind Speed (avg MPH)");

$p1 = new LinePlot($temp_temps,$temp_dates);
$graph->Add($p1);
$p1->SetFillGradient('lightgreen','white');
$p1->SetStepStyle();
$p1->SetColor("#6495ED");
$p1->SetLegend('Characteristic Wind Speed');
$graph->legend->SetFrameWeight(1);

$graph->Stroke(); //Draw graph

oci_free_statement($temp_agg_s);
oci_close($conn);

?>