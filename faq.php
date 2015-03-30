<?php
include("template.html");
?>
<header class="major">
<h2>Frequently Asked Questions</h2>

<span class="byline"> If you don't find what you want then write to us</span>

	</header>
	     <p>The following are the <I> Frequently Asked Questions </I> in the order of their frequency-</p>

<?php

include("config.php");
 if (!$conn)
   {
       echo "Cannot Connect";
	   
      
   }
   
else
	{

	echo "connected";
	 
	 
	
	 $b="SELECT * from faq";
	   $stid = oci_parse($conn,$b);//parsing your query
	   oci_execute($stid);// execute that parsed query
	   
	   while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {// getting your results in row 
		
					echo $row[0]." ".$row[1];
				}

}

								
include("footer.html");
?>
