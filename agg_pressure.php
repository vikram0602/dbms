<?php include("noside.php"); ?>
<?php include("config.php"); ?>

<?php 

if (!isset($_SESSION["CurrentUserType"])) {
  header("Location:index.php");
  die();
}

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

?> 

<style type="text/css">
    .Ta
    {
        display: table;
		
		 font-family: "Times New Roman", Times, serif;
		 width: 700px;
		 padding-top: 200px;
    
    padding-bottom: 200px;
    
		 border-collapse: collapse;
		 border: 1px solid black;
		 text-align:center;

    }
  
    .Heading
    {
        display: table-row;
        font-weight: bold;
        text-align: center;
		font-size:24px;
		color:#760113;
		font-style: italic;
		font-family: "Times New Roman", Times, serif;
    }
    .Ro
    {
        display: table-row;
        text-align: center;
		
    }
    .Ce
    {
        display: table-cell;
        border: solid;
        border-width: thin;
        padding-left: px;

    padding-right: 1px;
		font-size:20px;
		width: 10px;
		height:0px;
		
    }
</style>

<h1> Welcome! </h1>
<p> You are viewing the aggregate pressure tool for station number 

<?php //Intro message
if (!empty($_GET['station_id'])) {
  $station_id = (string)$_GET["station_id"];
} else {
  $station_id = "722060"; //Gainesville
}
echo $station_id;
?>
.

<form   action="agg_pressure.php" method="get" id="form2">
	 <div class='Ta'>
	 <div class='Ro'>
	 <div class='Ce'>
	 	 Month From:<select id="month_from" name="month_from"   > 
		 				<option value="aa" selected="selected" ></option>
		        <option value="01" >JANUARY</option>
				<option value="02" >FEBRUARY</option>
				<option value="03" >MARCH</option>
				<option value="04" >APRIL</option>
				<option value="05" >MAY</option>
				<option value="06" >JUNE</option>
				<option value="07" >JULY</option>
				<option value="08" >AUGUST</option>
				<option value="09" >SEPTEMBER</option>
				<option value="10" >OCTOBER</option>
				<option value="11" >NOVEMBER</option>
				<option value="12" >DECEMBER</option>

          </select>
		 </div>
         <div class='Ce'>
		 From:<select id="year_from" name="year_from"   > 
		 				<option value="aa" selected="selected" ></option>
		        <option value="2004" >2004</option>
				<option value="2005" >2005</option>
				<option value="2006" >2006</option>
				<option value="2007" >2007</option>
				<option value="2008" >2008</option>
				<option value="2009" >2009</option>
				<option value="2010" >2010</option>
				<option value="2011" >2011</option>
				<option value="2012" >2012</option>
				<option value="2013" >2013</option>
				<option value="2014" >2014</option>
				

          </select>
		 </div>
         <div class='Ce'>
		 Month Till:<select id="month_to" name="month_to"   > 
		 		<option value="aa" selected="selected" ></option>
		         <option value="01" >JANUARY</option>
				<option value="02" >FEBRUARY</option>
				<option value="03" >MARCH</option>
				<option value="04" >APRIL</option>
				<option value="05" >MAY</option>
				<option value="06" >JUNE</option>
				<option value="07" >JULY</option>
				<option value="08" >AUGUST</option>
				<option value="09" >SEPTEMBER</option>
				<option value="10" >OCTOBER</option>
				<option value="11" >NOVEMBER</option>
				<option value="12" >DECEMBER</option>

				</select>
		 </div>

          <div class='Ce'>
		  Till:<select id="year_to" name="year_to" > 
		 				<option value="aa" selected="selected" ></option>
		        <option value="2004" >2004</option>
				<option value="2005" >2005</option>
				<option value="2006" >2006</option>
				<option value="2007" >2007</option>
				<option value="2008" >2008</option>
				<option value="2009" >2009</option>
				<option value="2010" >2010</option>
				<option value="2011" >2011</option>
				<option value="2012" >2012</option>
				<option value="2013" >2013</option>
				<option value="2014" >2014</option>
		</select>
		</div>
		<input type="submit" value="DOMAIN FILTER">
		</div>
		</div>
		<input type="hidden" name="station_id" value="<?php echo $station_id; ?>">
		</form><br>

<h1> Station Summary for the Measurement Period</h1>

<?php

if (!$conn) {
  echo "<p>Cannot connect to database</p>";
} else {

  //Print results to the page
  echo "<img src=\"jpgraph/graph_pressure.php?station_id=$station_id&year_from=$yf&year_to=$yt&month_from=$mf&month_to=$mt\">";
} 

//Free unused resources
oci_close($conn);
?>

<?php include("footer.html"); ?>
