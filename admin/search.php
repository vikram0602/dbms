<title>Search</title>
<?php 
include_once("admin_template.php");
 require_once("config.php");

$editFormAction = $_SERVER['PHP_SELF'];

if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if (isset($_POST["MM_search"]))
	{


			
	if($_POST["MM_search"] == "form1"){

	$a=1;
$count=0;
	
	 $b="SELECT * from admin";
	   $stid = oci_parse($conn,$b);
	   oci_execute($stid);

 echo '<table border=2 ><tr ><td>Sno.</td><td>Admin Id:</td><td>Name</td><td>Contact No.</td><td>Email_ID</td><td>Edit</td><td>Delete</td></tr>';
								while($row= oci_fetch_array($stid,OCI_BOTH))
								{
									echo "<tr ><td><b>".$a.".</b></td>";
									echo "<td>".$row[0]."</td>";
									echo "<td>".$row[1]."</td>";
									echo "<td>".$row[3]."</td>";
									echo "<td>".$row[2]."</td>";	
									echo '<td><a href="edit-admin1.php?col='.$row[0].'">Edit</td>';
									echo '<td><a href="delete-admin.php?col='.$row[0].'">Delete</td></tr>';
									$a++;
									$count++;
								}
								echo "</table>";
								if($count==0)
								{
									echo "<h1>no data found</h1>";
								}
	}
	
	if($_POST["MM_search"] == "form2"){
	$a=1;
$count=0;
	$b="SELECT * from guest";
	   $stid = oci_parse($conn,$b);
	   oci_execute($stid);

 echo '<table border=2 ><tr ><td>Sno.</td><td>Guest Id:</td><td>Name</td><td>Contact No.</td><td>Email_ID</td><td>Edit</td><td>Delete</td></tr>';
								while($row= oci_fetch_array($stid,OCI_BOTH))
								{
									echo "<tr ><td><b>".$a.".</b></td>";
									echo "<td>".$row[0]."</td>";
									echo "<td>".$row[1]."</td>";
									echo "<td>".$row[3]."</td>";
									echo "<td>".$row[2]."</td>";	
									echo '<td><a href="edit-guest.php?col='.$row[0].'">Edit</td>';
									echo '<td><a href="delete-guest.php?col='.$row[0].'">Delete</td></tr>';
									$a++;
									$count++;
								}
								echo "</table>";
								if($count==0)
								{
									echo "<h1>no data found</h1>";
								}
	}
	
	
	}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Search</title>
</head>

<body>
<div style="display: table;">
  <div style="width:30px; display: table-cell;">
  <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1"   >
  <table >
    
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Admin record" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_search" value="form1" />
</form>
  </div>
  <div style="width:30px; display: table-cell;">
  <form action="<?php echo $editFormAction; ?>" method="post" name="form2" id="form2"   >
  <table >
    
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Guest Record" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_search" value="form2" />
</form>
  </div>
  <!--<div style="width:30px; display: table-cell; ">
  <form action="search.php" method="post" name="form3" id="form3">
  <table >
    
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Back"  /></td>
    </tr>
  </table>
  </form>
  </div> -->
 
</div>
</body>
</html>
