<title>Edit Page</title>
  <?php 
include("admin_template.php");
require_once("config.php");


$a=1;
$count=0;
	$b="SELECT * from newpage";
  $stid = oci_parse($conn,$b);//parsing your query
	   oci_execute($stid);
 echo '<table border=2 ><tr ><td>Sno.</td><td>Page name:</td><td>Delete</td></tr>';
								while(($row = oci_fetch_array($stid, OCI_BOTH)) != false)
								{
									echo "<tr ><td><b>".$a.".</b></td>";
									echo "<td>".$row[0]."</td>";
									
									//echo '<td><a href="editpage.php?title='.$row['title'].'">Edit</td>';
									echo '<td><a href="delete-page.php?title='.$row[0].'">Delete</td></tr>';
									$a++;
									$count++;
								}
								echo "</table>";
								if($count==0)
								{
									echo "<h1>no data found</h1>";
								}
	
?>


<body>
<div style="display: table;">
  <div style="width:30px; display: table-cell;">
  
  </div>
  </div>
  </body>
