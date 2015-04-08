<script>
function validate1(x,y,z,k)
		{
		var id=document.forms[x][z].value;
		var id2=document.forms[x][k].value;
			var regexp = /[a-z]/gi;
			//alert(id);
			
			if(id == "" || id == null ||id2 == "" || id2 == null)
			{
				
				
				document.getElementById(y).innerHTML="* Box is empty!";
				//document.getElementById('uname').value=null;
				document.getElementById(z).focus();
				return false;
			}
			if(strcmp(id,id2)!=0)
			{
				
				
				document.getElementById(y).innerHTML="* Password doesnot match!";
				//document.getElementById('uname').value=null;
				document.getElementById(z).focus();
				return false;
			}
			return true;
		}
</script>

<?php 
include("admin_template.php");
include('config.php');
$user=$_SESSION["CurrentUser"];
//echo $user;
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
 
	$b="UPDATE login SET password='".$_POST['pass1']."' WHERE user_name='$user'";
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



?>
<body>

<h1>Change password</h1>
<table align>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1" onsubmit='return validate1("form1","error","pw1","pw2")'>
  <table align>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">New Password:</td>
            <td><input type="password" name="pass1" id='pw1' size="32" /></td>

    </tr>
	   <tr valign="baseline">
      <td nowrap="nowrap" align="right">Confirm Password:</td>
            <td><input type="password" name="pass2" id='pw2' size="32" /></td>

    </tr>
	<tr><td><p id="error" style="color:red; font-size:9px;"></p></td></tr>
	<tr valign="baseline">
	<input type="hidden" name="MM_update" value="form1" />
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Change Password" /></td>
    </tr>
	</table></form>
	<?php
	oci_close($conn);
?>