<title>Edit Guest</title>
<?php include('config.php');

 ?>
<?php
include("admin_template.php");
$user=$_SESSION["CurrentUser"];

if(isset($_GET["col"]))
	$user=$_GET["col"];

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
 
	$b="UPDATE guest SET name='".$_POST['Firstname']."', email='".$_POST['email']."', Contact=".$_POST['Contact']." WHERE user_name='$user'";
	echo $b;
	$stid = oci_parse($conn,$b);//parsing your query
	   oci_execute($stid);// execute that parsed query
		oci_free_statement($stid);
  

  $updateGoTo = "record-updated.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$query_Recordset1 = "SELECT user_name, name, email, contact FROM guest where user_name='$user'";
$Recordset1 = oci_parse($conn,$query_Recordset1);
oci_execute($Recordset1);
$row_Recordset1 = oci_fetch_array($Recordset1,OCI_BOTH);
$totalRows_Recordset1 = oci_num_rows($Recordset1);
//echo $query_Recordset1."  ".$Recordset1['user_name'];
?>


<body>

<h1>Edit Admin Details</h1>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Username:</td>
      <td><h1><?php echo $row_Recordset1[0]; ?></h1></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Name:</td>
      <td><input type="text" name="Firstname" value="<?php echo htmlentities($row_Recordset1[1], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
   
   
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Emailid:</td>
      <td><input type="text" name="email" value="<?php echo htmlentities($row_Recordset1[2], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Contact:</td>
      <td><input type="text" name="Contact" value="<?php echo htmlentities($row_Recordset1[3], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
   
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Update record" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1" />
  <input type="hidden" name="Username" value="<?php echo $row_Recordset1[0]; ?>" />
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
oci_free_statement($Recordset1);
oci_close($conn);
?>
