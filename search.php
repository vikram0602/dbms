<title>ANALYSIS</title>
<style type="text/css">
    .Ta
    {
        display: table;
		
		 font-family: "Times New Roman", Times, serif;
		 width: 1000px;
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

<?php

include("noside.php");
if (isset($_GET["lng1"]))
	$lng=(float)$_GET["lng1"];
if (isset($_GET["lat1"]))
	$lat=(float)$_GET["lat1"];
if (isset($_GET["humidity"]))
	$hum= (float)$_GET["humidity"];
if (isset($_GET["wind"]))
	$wind= (float)$_GET["wind"];
if (isset($_GET["temperature"]))
	$tem= (float)$_GET["temperature"];
if (isset($_GET["pressure"]))
	$pre=(float)$_GET["pressure"];
if (isset($_GET["rainfall"]))
	$rf=(float)$_GET["rainfall"];
if (isset($_GET["date1"]))
	$mf=(int)$_GET["date1"];
if (isset($_GET["date2"]))
	$yf=(int)$_GET["date2"];
if (isset($_GET["date3"]))
	$mt=(int)$_GET["date3"];
if (isset($_GET["date4"]))
	$yt=(int)$_GET["date4"];

if(!isset($hum) or $hum=='aa' or $hum==NULL)
	$hum=0;
if(!isset($wind) or $wind=='aa' or $wind==NULL)
	$wind=0;
if(!isset($tem) or $tem=='aa' or $tem== NULL)
	$tem=-20;
if(!isset($pre) or $pre=='aa' or $pre== NULL)
	$pre=0;
if(!isset($rf) or $rf=='aa' or $rf== NULL)
	$rf=0;
if(!isset($mf) or $mf=='aa' or $mf== NULL)
	$mf=01;
if(!isset($yf) or $yf=='aa' or $yf== NULL)
	$yf=2004;
if(!isset($mt) or $mt=='aa' or $mt== NULL)
	$mt=12;
if(!isset($yt) or $yt=='aa' or $yt== NULL)
	$yt=2014;

$lng1=round($lng,2);
$lat1=round($lat,2);
$msid="100";
//echo $lng1."          ".$lat1."         ".$hum. "      ".$wind."    ".$tem;
?>
<body>
<h1> Data Preview </h1>
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
				<option value="60"  >> 60</option>
				<option value="70"  >> 70</option>
				<option value="80"  >> 80</option>
				<option value="-10" >< 10</option>
				<option value="-20" >< 20</option>
				<option value="-30" >< 30</option>
				<option value="-50"  >< 50</option>
				<option value="-60"  >< 60</option>
				<option value="-70"  >< 70</option>
				<option value="-80"  >< 80</option>
          </select>
		</div>
		<div class='Ce'>
	 	 Wind_Speed:<select id="wind" name="wind"   > 
		 				<option value="aa" selected="selected" ></option>
		 <option value="0" >> 0</option>
				<option value="1" >> 1</option>
				<option value="2" >> 2</option>
				<option value="3" >> 3</option>
				<option value="4" >> 4</option>
				<option value="5" >> 5</option>
				<option value="6" >> 6</option>
				<option value="7" >> 7</option>
				<option value="8" >> 8</option>
				<option value="-1" >< 1</option>
				<option value="-2" >< 2</option>
				<option value="-3" >< 3</option>
				<option value="-4" >< 4</option>
				<option value="-5" >< 5</option>
				<option value="-6" >< 6</option>
				<option value="-7" >< 7</option>
				<option value="-8" >< 8</option>
          </select>
		 </div>
		<div class='Ce'>
	 Temperature:<select id="temperature" name="temperature"   > 	
	 				<option value="aa" selected="selected" ></option>
	  <option value="0" >> 0</option>
	  			<option value="-30" >> -30</option>
				<option value="-20" >> -20</option>
				<option value="-10" >> -10</option>
				<option value="10" >> 10</option>
				<option value="20" >> 20</option>
				<option value="50" >> 50</option>
				<option value="70" >> 70</option>
				<option value="80" >> 80</option>
				<option value="90" >> 90</option>
				<option value="-2030" >< -30</option>
				<option value="-2020" >< -20</option>
				<option value="-2010" >< -10</option>
				<option value="-1990" >< 10</option>
				<option value="-1980" >< 20</option>
				<option value="-1950" >< 50</option>
				<option value="-1930" >< 70</option>
				<option value="-1920" >< 80</option>
				<option value="-1910" >< 90</option>
          </select>
		  </div>

		  <div class='Ce'>
	 Pressure:<select id="pressure" name="pressure"   > 	
	 				<option value="aa" selected="selected" ></option>
	  <option value="0" >> 0</option>
				<option value="980" >> 980</option>
				<option value="990" >> 990</option>
				<option value="1000" >> 1000</option>
				<option value="1010" >> 1010</option>
				<option value="1020" >> 1020</option>
				<option value="-980" >< 980</option>
				<option value="-990" >< 990</option>
				<option value="-1000" >< 1000</option>
				<option value="-1010" >< 1010</option>
				<option value="-1020" >< 1020</option>
          </select>
		  </div>

		  <div class='Ce'>
	 Rainfall:<select id="rainfall" name="rainfall"   > 	
	 				<option value="aa" selected="selected" ></option>
	            <option value="0" >> 0</option>
	            <option value="0.01">> 0.01</option>
				<option value="0.02" >> 0.02</option>
				<option value="0.03" >> 0.03</option>
				<option value="0.04" >> 0.04</option>
				<option value="0.05" >> 0.05</option>
				<option value="-0.01">< 0.01</option>
				<option value="-0.02" >< 0.02</option>
				<option value="-0.03" >< 0.03</option>
				<option value="-0.04" >< 0.04</option>
				<option value="-0.05" >< 0.05</option>
          </select>
		  </div>

		  <div class='Ce'>
	 	 Month From:<select id="date1" name="date1"   > 
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
		 From:<select id="date2" name="date2"   > 
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
		 Month Till:<select id="date3" name="date3"   > 
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
		  Till:<select id="date4" name="date4" > 
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
				

<?php
include_once("config.php");

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
	   oci_free_statement($stid);
	?>


          </select>
		 </div>

	 <div class='Ce'> 
<input type="submit" value="SEARCH">
	  </div> 
	  </div></div> 
	  </form>
	  <form action="<?php
	  if (isset($_SESSION["CurrentUser"])) {
	  	echo "tools.php";
	  } else {
	  	echo "visitors.php";
	  }
	    ?>" method="get">
	 <br>
<input type="hidden" name="station_id" value="<?php echo $msid; ?>">
<input type="submit" value="Continue to Next Page">
	  </form> 
</body>

<?php
	   echo "</br> Longitude- ".$lng." Latitude- ".$lat."</br>Station id=".$msid."</br>"; 

       //echo "Connected to foo";
	  
	
		//Ascribe filtering directions. HACK! HACK! HACK!
	    //Should give user a more explicit choice of filter direction
	    if ($hum < 0) {
	    	$humidity_dir = "<";
	    	$hum = -$hum;
	    } else {
	    	$humidity_dir = ">=";
	    }
	    if ($wind < 0) {
	    	$wind_dir = "<";
	    	$wind = -$wind;
	    } else {
	    	$wind_dir = ">=";
	    }
	    if ($tem < -1000) {
	    	$tem += 2000;
	    	$tem_dir = "<";
	    } else {
	    	$tem_dir = ">=";
	    }
	    if ($pre < 0) {
	    	$pre = -$pre;
	    	$pre_dir = "<";
	    } else {
	    	$pre_dir = ">=";
	    }
	    if ($rf < 0) {
	    	$rf = -$rf;
	    	$rf_dir = "<";
	    } else {
	    	$rf_dir = ">=";
	    }

	   $yf=(int)$yf;
	   $mf=(int)$mf;
	   $yt=(int)$yt;
	   $mt=(int)$mt;

		 $b="SELECT * from Climate_data inner join station_table on Climate_data.station_id=station_table.station_id where Climate_data.station_id=:msid and humidity $humidity_dir :hum and wind_speed $wind_dir :wind and temperature $tem_dir :tem and pressure $pre_dir :pre and rainfall $rf_dir :rf and time_stamp BETWEEN TO_DATE ('$yf/$mf/01', 'yyyy/mm/dd')
AND TO_DATE ('$yt/$mt/28', 'yyyy/mm/dd')";
		
		//die($b);
		// echo $b;
	   $stid = oci_parse($conn,$b);
	   oci_bind_by_name($stid,":tem",$tem);
	   oci_bind_by_name($stid,":pre",$pre);
	   oci_bind_by_name($stid,":rf",$rf);
	   oci_bind_by_name($stid,":hum",$hum);
	   oci_bind_by_name($stid,":wind",$wind);
	   oci_bind_by_name($stid,":msid",$msid);
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
								 $flag=false;
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
								$flag=true;
					
						//echo "    <td>" .$row[0]." ".round($row[1],2)." ".round($row[2],2)." ".round($row[3],2)." ".round($row[4],2)." ".round($row[5],2)." ".$row[6]." ". "</td>\n";
    
   
	 
	   }
			echo "</div>";	
			if (!$flag) 
			{
				echo "<p>No Samples Found!</p>";
			}
	   oci_free_statement($stid);  
       oci_close($conn);
   
   }
   else
   {
       die("could not connect to foo");
   }
include("footer.html");
?>
