<title>Edit Page</title>
<script type="text/javascript" src="/intern123/ckeditor/ckeditor.js"></script>
  <?php 
include("admin_temp.php");
require_once("config.php");
 $con1 = mysql_pconnect($host, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR); 
  mysql_select_db($database, $con1);

$a=1;
$count=0;
	$b="SELECT * from newpage";
 $result3 = mysql_query($b, $con1) or die(mysql_error());
 echo '<table border=2 ><tr ><td>Sno.</td><td>Page name:</td><td>Delete</td></tr>';
								while($row= mysql_fetch_array($result3))
								{
									echo "<tr ><td><b>".$a.".</b></td>";
									echo "<td>".$row['title']."</td>";
									
									//echo '<td><a href="editpage.php?title='.$row['title'].'">Edit</td>';
									echo '<td><a href="delete-page.php?title='.$row['title'].'">Delete</td></tr>';
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