<?php
       //echo "Connected to foo";
$conn= oci_connect("vkhurana","pulsar220", '(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = oracle.cise.ufl.edu)(PORT = 1521)) (CONNECT_DATA = (SERVICE_NAME = ORCL) (SID = ORCL)))');

//$conn = oci_pconnect("vkhurana","pulsar220", "oracla.cise.ufl.edu:1521/orcl");
   if ($conn)
   {
	   $b="SELECT * from Climate_data";
	   $stid = oci_parse($conn,$b);
	   oci_execute($stid);
	   echo "<table border='1'>\n";
	   while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
				 echo "<tr>\n";
					foreach ($row as $item) {
						echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
	   
	  
	   }
       //echo "Connected to foo";
	   echo "</table>";
       oci_close($conn);
   }
   else
   {
       die("could not connect to foo");
   }
?>

