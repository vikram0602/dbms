<title>Edit Faculty</title>
<?php  require_once("config.php");
 $con1 = mysql_pconnect($host, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR); 
  mysql_select_db($database, $con1); ?>
<?php
include("admin_temp.php");
$user=$_SESSION["CurrentUser"];

if(isset($_GET["col"]))
	$user=$_GET["col"];
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE faculty_details SET Firstname=%s, Lastname=%s, email_id=%s, contact_no=%s, gender=%s, description=%s, designation=%s WHERE username='$user'",
                       GetSQLValueString($_POST['Firstname'], "text"),
                       GetSQLValueString($_POST['Lastname'], "text"),
                       GetSQLValueString($_POST['email_id'], "text"),
                       GetSQLValueString($_POST['contact_no'], "text"),
                       GetSQLValueString($_POST['gender'], "text"),
					    GetSQLValueString($_POST['description'], "text"),
						 GetSQLValueString($_POST['designation'], "text"));

  mysql_select_db($database, $con1);
  $Result1 = mysql_query($updateSQL, $con1) or die(mysql_error());

  $updateGoTo = "record-added.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

mysql_select_db($database, $con1);
$query_Recordset1 = "SELECT Username, Firstname, Lastname, email_id, contact_no, gender, description, designation FROM faculty_details where username='$user'";
$Recordset1 = mysql_query($query_Recordset1, $con1) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>

<head>

<title>Edit Profile</title>
</head>

<body>

<h1>Edit Admin Details</h1>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Username:</td>
      <td><?php echo $row_Recordset1['Username']; ?></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Firstname:</td>
      <td><input type="text" name="Firstname" value="<?php echo htmlentities($row_Recordset1['Firstname'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
   
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Lastname:</td>
      <td><input type="text" name="Lastname" value="<?php echo htmlentities($row_Recordset1['Lastname'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
	
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Emailid:</td>
      <td><input type="text" name="email_id" value="<?php echo htmlentities($row_Recordset1['email_id'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Contact:</td>
      <td><input type="text" name="contact_no" value="<?php echo htmlentities($row_Recordset1['contact_no'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
	<tr valign="baseline">
      <td nowrap="nowrap" align="right">Description:</td>
      <td><input type="text" name="description" value="<?php echo htmlentities($row_Recordset1['description'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
	<tr valign="baseline">
      <td nowrap="nowrap" align="right">Designation:</td>
      <td><input type="text" name="designation" value="<?php echo htmlentities($row_Recordset1['designation'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
	
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Gender:</td>
      <td valign="baseline"><table>
        <tr>
          <td><input type="radio" name="gender" value="male" <?php if (!(strcmp(htmlentities($row_Recordset1['gender'], ENT_COMPAT, 'utf-8'),"male"))) {echo 'checked="checked"';} ?> />

       Male</td>
        </tr>
        <tr>
          <td><input type="radio" name="Gender" value="female" <?php if (!(strcmp(htmlentities($row_Recordset1['gender'], ENT_COMPAT, 'utf-8'),"female"))) {echo 'checked="checked"';} ?> />
            Female</td>
        </tr>
      </table></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Update record" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1" />
  <input type="hidden" name="Username" value="<?php echo $row_Recordset1['Username']; ?>" />
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
