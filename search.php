<title>ANALYSIS</title>
<style type="text/css">
    .Ta
    {
        display: table;
		
		 font-family: "Times New Roman", Times, serif;
		 width: 1200px;
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
		width: 150px;
		height:0px;
		
    }
</style>

<?php
<<<<<<< HEAD
include("noside.html");

||||||| merged common ancestors
include("noside.html");
=======
include("noside.php");
>>>>>>> 6cf142d3d85da801fa948c5591b0cbbb5bfb1279
$lng=$_GET["lng1"];
$lat=$_GET["lat1"];
$hum= $_GET["humidity"];
$wind= $_GET["wind"];
$tem= $_GET["temperature"];
$pre=$_GET["pressure"];
$rf=$_GET["rainfall"];
$mf=$_GET["date"];
$yf=$_GET["date"];
$mt=$_GET["date"];
$yt=$_GET["date"];

if($hum=='aa' or $hum==NULL)
	$hum=-100;
if($wind=='aa' or $wind==NULL)
	$wind=0;
if($tem=='aa' or $tem== NULL)
	$tem=-20;
if($pre=='aa' or $pre== NULL)
	$pre=0;
if($rf=='aa' or $rf== NULL)
	$rf=0;
if($mf=='aa' or $mf== NULL)
	$mf=0;
if($yf=='aa' or $yf== NULL)
	$mf=0;
if($mt=='aa' or $mt== NULL)
	$mt=0;
if($yt=='aa' or $yt== NULL)
	$yt=0;

$lng1=round($lng,2);
$lat1=round($lat,2);
$msid="100";
//echo $lng1."          ".$lat1."         ".$hum. "      ".$wind."    ".$tem;
?>
<body>
<form   action="search.php" method="get" id="form2">
	 <input type="hidden" id="lat1" name="lat1" value="<?php echo $lat ?>"  >
	 <input type="hidden" id="lng1" name="lng1" value="<?php echo $lng ?>" > 
	 <div class='Ta'>
	 <div class='Ro'>
	 <div class='Ce'>
	 Humidity:  <select id="humidity" name="humidity"  > 
				<option value="aa" selected="selected" ></option>
				<option value="0" >> 0</option>
				<option value="10" >> 10</option>
				<option value="20" >> 20</option>
				<option value="30" >> 30</option>
				<option value="50"  >> 50</option>
          </select>
		</div>
		<div class='Ce'>
	 	 Wind_Speed:<select id="wind" name="wind"   > 
		 				<option value="aa" selected="selected" ></option>
		 <option value="0" >> 0</option>
				<option value="2" >> 2</option>
				<option value="4" >> 4</option>
				<option value="6" >> 6</option>
				<option value="10" >> 10</option>
          </select>
		 </div>
		<div class='Ce'>
	 Temperature:<select id="temperature" name="temperature"   > 	
	 				<option value="aa" selected="selected" ></option>
	  <option value="0" >> 0</option>
				<option value="10" >> 10</option>
				<option value="20" >> 20</option>
				<option value="50" >> 50</option>
				<option value="70" >> 70</option>
          </select>
		  </div>

		  <div class='Ce'>
	 Pressure:<select id="pressure" name="pressure"   > 	
	 				<option value="aa" selected="selected" ></option>
	  <option value="0" >> 0</option>
				<option value="800" >> 800</option>
				<option value="1000" >> 1000</option>
				<option value="1200" >> 1200</option>
				<option value="1400" >> 1400</option>
          </select>
		  </div>

		  <div class='Ce'>
	 Rainfall:<select id="rainfall" name="rainfall"   > 	
	 				<option value="aa" selected="selected" ></option>
	            <option value="0" >> 0</option>
	            <option value="0.5">> 0.5</option>
				<option value="1" >> 1</option>
				<option value="2" >> 2</option>
				<option value="5" >> 5</option>
				<option value="7" >> 7</option>
          </select>
		  </div>

		  <div class='Ce'>
	 	 Month From:<select id="date" name="date"   > 
		 				<option value="aa" selected="selected" ></option>
		        <option value="JAN" >JANUARY</option>
				<option value="FEB" >FEBRUARY</option>
				<option value="MAR" >MARCH</option>
				<option value="APR" >APRIL</option>
				<option value="MAY" >MAY</option>
				<option value="JUN" >JUNE</option>
				<option value="JUL" >JULY</option>
				<option value="AUG" >AUGUST</option>
				<option value="SEP" >SEPTEMBER</option>
				<option value="OCT" >OCTOBER</option>
				<option value="NOV" >NOVEMBER</option>
				<option value="DEC" >DECEMBER</option>

          </select>
		 </div>
         <div class='Ce'>
		 Year From:<select id="date" name="date"   > 
		 				<option value="aa" selected="selected" ></option>
		        <option value="04" >2004</option>
				<option value="05" >2005</option>
				<option value="06" >2006</option>
				<option value="07" >2007</option>
				<option value="08" >2008</option>
				<option value="09" >2009</option>
				<option value="10" >2010</option>
				<option value="11" >2011</option>
				<option value="12" >2012</option>
				<option value="13" >2013</option>
				<option value="14" >2014</option>
				

          </select>
		 </div>
         <div class='Ce'>
		 Month Till:<select id="date" name="date"   > 
		 				<option value="aa" selected="selected" ></option>
		        <option value="JAN" >JANUARY</option>
				<option value="FEB" >FEBRUARY</option>
				<option value="MAR" >MARCH</option>
				<option value="APR" >APRIL</option>
				<option value="MAY" >MAY</option>
				<option value="JUN" >JUNE</option>
				<option value="JUL" >JULY</option>
				<option value="AUG" >AUGUST</option>
				<option value="SEP" >SEPTEMBER</option>
				<option value="OCT" >OCTOBER</option>
				<option value="NOV" >NOVEMBER</option>
				<option value="DEC" >DECEMBER</option>

				</select>
		 </div>

          <div class='Ce'>
		  Year Till:<select id="date" name="date" > 
		 				<option value="aa" selected="selected" ></option>
		        <option value="04" >2004</option>
				<option value="05" >2005</option>
				<option value="06" >2006</option>
				<option value="07" >2007</option>
				<option value="08" >2008</option>
				<option value="09" >2009</option>
				<option value="10" >2010</option>
				<option value="11" >2011</option>
				<option value="12" >2012</option>
				<option value="13" >2013</option>
				<option value="14" >2014</option>
				

          </select>
		 </div>

	 <div class='Ce'> 
<input type="submit" value="SEARCH">
	  
	  </div> 
	  </div></div> 
	  </form>
</body>
<?php
$conn= oci_connect("vkhurana","pulsar220", '(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = oracle.cise.ufl.edu)(PORT = 1521)) (CONNECT_DATA = (SERVICE_NAME = ORCL) (SID = ORCL)))');

//$conn = oci_pconnect("vkhurana","pulsar220", "oracla.cise.ufl.edu:1521/orcl");
   if ($conn)
   {
	   $b="SELECT * from station_table";
	   $stid = oci_parse($conn,$b);
	   oci_execute($stid);
		$minsum=100;
		 while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
			$sid=$row[0];
			$t_lat=round($row[1],2);
			$t_lng=round($row[2],2);
			$mlat=abs($lat1- $t_lat);
			$mlng=abs($lng1- $t_lng);
			
			$sum=$mlat+$mlng;
			if($sum<$minsum)
			{
				$msid=$sid;
				$minsum=$sum;
				$lng=$t_lng;
				$lat =$t_lat;
					   

			}
	   }
	   echo "</br>".$lng."    a   ".$lat."</br>station id=".$msid."</br>";
       //echo "Connected to foo";
	  
	
		 $b="SELECT * from Climate_data where station_id='".$msid."' and humidity >= ".$hum." and wind_speed >= ".$wind.
		 " and temperature >= ".$tem." and pressure >= ".$pre." and rainfall >= ".$rf;//."and MONTH(Date) >= ".$mf." AND YEAR(Date) >= ".$yf.
		 //" and MONTH(Date) <= ".$mt." AND YEAR(Date) <= ".$yt;
		// echo $b;
	   $stid = oci_parse($conn,$b);
	   oci_execute($stid);
	   echo '<div class="Ta">';
						echo '<div class="Heading">
								<div class="Ce">Station id</div>
								
								<div class="Ce">Pressure</div>
								<div class="Ce">Humidity</div>
								<div class="Ce">Rainfall</div>
								<div class="Ce">Wind speed</div>
								<div class="Ce">Temperature</div>
								<div class="Ce">Date</div>
 								 </div>';
								 
	   while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
				echo '<div class="Ro">
    								<div class="Ce">'.$row[0].'</div>
  								
									  <div class="Ce">'.round($row[1],2).'</div>
									   <div class="Ce">'.round($row[2],2).'</div>
									    <div class="Ce">'.round($row[3],5).'</div>
										 <div class="Ce">'.round($row[4],2).'</div>
										  <div class="Ce">'.round($row[5],2).'</div>
										   <div class="Ce">'.$row[6].'</div>
 								 </div>';
								
					
						//echo "    <td>" .$row[0]." ".round($row[1],2)." ".round($row[2],2)." ".round($row[3],2)." ".round($row[4],2)." ".round($row[5],2)." ".$row[6]." ". "</td>\n";
    
   
	 
	   }
			echo "</div>";	   
       oci_close($conn);
   
   }
   else
   {
       die("could not connect to foo");
   }
include("footer.html");
?>