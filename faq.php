<?php
include("template.php");
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
	 
	
	   $b="SELECT * from faq order by question";
	   $stid = oci_parse($conn,$b);//parsing your query
	   oci_execute($stid);// execute that parsed query
	   
	   $question_number = 0;
	   while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {// getting your results in row 
			$question_number += 1;
					echo "<p style=color:blue><i><strong>$question_number) ".$row[0]."</p></i></strong><p>".$row[1]."</p>" ;
		}
		oci_free_statement($stid);

}

include("footer.html");
?>
