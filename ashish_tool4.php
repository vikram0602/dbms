<title> RAINFALL ANALYSIS</title>
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

if (!isset($_SESSION["CurrentUserType"])) {
  header("Location:index.php");
  die();
}

if (isset($_GET["rainfall"]))
	$rf= (float)$_GET["rainfall"];
if (isset($_GET["date1"]))
	$mf=$_GET["date1"];
if (isset($_GET["date2"]))
	$yf=$_GET["date2"];
if (isset($_GET["date3"]))
	$mt=$_GET["date3"];
if (isset($_GET["date4"]))
	$yt=$_GET["date4"];
$msid=(string)$_GET["station_id"];


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
if(!isset($msid) or $msid== NULL)
	$msid=722110;

//Cast to correct types to resist SQL injection attacks
$mf = (int)$mf;
$yf = (int)$yf;
$mt = (int)$mt;
$yt = (int)$yt;
$rf = (int)$rf;

?>
<body>
<h1> Rainfall Preview </h1>
<form   action="ashish_tool4.php" method="get" id="form2">
	 <div class='Ta'>
	 <div class='Ro'>
	 <input type="hidden" name="station_id" value="<?php echo $msid; ?>">
		
		<div class='Ce'>
	 Rainfall:<br><select id="rainfall" name="rainfall"   > 	
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
		 Year From:<select id="date2" name="date2"   > 
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
		 Year Till:<select id="date4" name="date4" > 
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
<input type="submit" value="SEARCH">
	  
	  </div> 
	  </div></div> 
	  </form>
</body>
<?php
include_once("config.php");

   
	  
	   echo "<br>station id=".$msid."<br>"; 
       //echo "Connected to foo";
	  if ($rf < 0) {
	    	$rf = -$rf;
	    	$rf_dir = "<";
	    } else {
	    	$rf_dir = ">=";
	    }

	
		 $b="SELECT station_id, rainfall, to_char(time_stamp, 'DD-Mon-YYYY') from Climate_data where station_id=:msid and rainfall $rf_dir ".$rf." and time_stamp BETWEEN TO_DATE ('$yf/$mf/01', 'yyyy/mm/dd')
AND TO_DATE ('$yt/$mt/28', 'yyyy/mm/dd')";
		
		//die($b);
		// echo $b;
	   $stid = oci_parse($conn,$b);
	   oci_bind_by_name($stid,":msid", $msid);
	   oci_execute($stid);
	   echo '<div class="Ta">';
						echo '<div class="Heading">
								<div class="Ce">Station id</div>
								
								
								<div class="Ce">Rainfall</div>
								<div class="Ce">Date</div>
 								 </div>';
								 $flag=false;
	   while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
				echo '<div class="Ro">
    								<div class="Ce">'.$row[0].'</div>
  								
									  <div class="Ce">'.round($row[1],2).'</div>
									   <div class="Ce">'.$row[2].'</div>
									    
										 
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

include("footer.html");
?>
