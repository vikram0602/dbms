<title>Search</title>
<?php 
include_once("admin_template.php");
 require_once("config.php");

	$a=1;
$count=0;
	
	 $b="SELECT * from contact";
	   $stid = oci_parse($conn,$b);
	   oci_execute($stid);

 echo '<table border=2 ><tr ><td>Sno.</td><td>Email Id:</td><td>Message</td></tr>';
								while($row= oci_fetch_array($stid,OCI_BOTH))
								{
									echo "<tr ><td><b>".$a.".</b></td>";
									echo "<td>".$row[0]."</td>";
									echo "<td>".$row[1]."</td></tr>";
									$a++;
									$count++;
								}
								echo "</table>";
								if($count==0)
								{
									echo "<h1>no data found</h1>";
								}
	oci_free_statement($stid);
	oci_close($conn);
?>