<?php
include("config.php");
include("template.php");
if ($conn)
   {
	   echo "connected";
	 
	 
	 
	 //now we write our query
	 $b="SELECT * from admin";//writing a query we want to execute, store in a variable for convenience!
	   $stid = oci_parse($conn,$b);//parsing your query
	   oci_execute($stid);// execute that parsed query
	   
	   while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {// getting your results in row 
		
					echo $row[0]." ".$row[1];
			
    }
	   echo "</br>";
	   
	 
	 
	 
	 //closing connection
	 oci_close($conn);
	 include("footer.html");
   }
   else
   {
	   echo " NOT";
   }
?>