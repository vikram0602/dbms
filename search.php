<?php
$lng=$_POST["lng1"];
$lat=$_POST["lat1"];
$lng1=round($lng,2);
$lat1=round($lat,2);
$msid="100";
echo $lng1."          ".$lat1;

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
	   echo "</br>".$lng."    a   ".$lat."</br>".$msid;
       //echo "Connected to foo";
	  
	$a="SELECT * from climate_data where station_id=".$msid;
	   $stid1 = oci_parse($conn,$a);
	   oci_execute($stid1);
		 while (($row1 = oci_fetch_array($stid1, OCI_BOTH)) != false) {
			  
			  foreach ($row1 as $item) {
						echo "    " . round($item,2) . "";
			  
		 }
		 echo "</br";
		 }
       oci_close($conn);
   
   }
   else
   {
       die("could not connect to foo");
   }

?>