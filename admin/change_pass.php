<?php  require_once("config.php");
 $con1 = mysql_pconnect($host, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR); 
  mysql_select_db($database, $con1); ?>
  
  <script>
  
		function validate()
		{
		
		
			var id=document.getElementById('prev');
			
			if(id.value == "" || id.value == null)
			{
				
				
				document.getElementById("error").innerHTML="* Previous pass should be filled";
				//document.getElementById('uname').value=null;
				document.getElementById('prev').focus();
				return false;
			}
			id=document.getElementById('new');
			
			if(id.value == "" || id.value == null)
			{
				
				
				document.getElementById("error").innerHTML="* New pass should be filled";
				//document.getElementById('uname').value=null;
				document.getElementById('new').focus();
				return false;
			}
			id=document.getElementById('cnew');
			if(id.value == "" || id.value == null)
			{
				
				
				document.getElementById("error").innerHTML="* Confirm Pass should be filled";
				//document.getElementById('uname').value=null;
				document.getElementById('cnew').focus();
				return false;
			}
			else
				{
					document.getElementById("error").innerHTML=" ";
				
				}
				
				return true;
				}
  </script>
  
<?php
include("admin_temp.php");
$user=$_SESSION["CurrentUser"];

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
if (isset($_POST["MM_insert"]))
	{
		if($_POST["MM_insert"] == "form1"){
		$a=GetSQLValueString($_POST['prev'], "text");
		$p=GetSQLValueString($_POST['new'], "text");
		$c=GetSQLValueString($_POST['cnew'], "text");
		$b="SELECT * from login where username=".$user;
 $result3 = mysql_query($b, $con1) or die(mysql_error());
 $row = mysql_fetch_array($result3);
 $d="'".$row['password']."'";
 echo $a.$d;
 if($d==$a && $p==$c)
 {
 $k= " UPDATE login SET password=".$p."WHERE username=".$user;
  $result1 = mysql_query($k, $con1) or die(mysql_error());
  header('Location:record-updated.php');
 }
 else
 {
 header('Location:emptyField.php');
 }
 

		}
}


?>
<style type="text/css">
    .Table
    {
        display: table;
		padding-bottom:5px;
		padding-top: 5px;
    }
  

    .Row
    {
        display: table-row;
		
    }
    .Cell
    {
        display: table-cell;
        border: solid;
        border-width: thin;
        padding-left: 5px;
        padding-right: 5px;
		font-size:20px;
		width: 150px;
		height:30px;
    }
	
</style>
<div class="Table" ><form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1" onsubmit="return validate()">
<div class="Row"><div class="Cell" >Previous Password:</div>
		<div  class="Cell" >  <input type="password" name="prev" id="prev" /></div>	
		</div> 
		<div class="Row"><div class="Cell" >New Password:</div>
		<div  class="Cell" >  <input type="password" name="new" id="new" /></div>	
		</div> 
	<div class="Row"><div class="Cell" >Confirm Password:</div>
		<div  class="Cell" >  <input type="password" name="cnew" id="cnew" /></div>	
		</div> 
	<div class="Row"><div class="Cell" align="right" ><input type="submit" name="Submit" value="Submit" /></div><div class="Cell" align="right" ><a1 id="error" style="color:red; font-size:9px;"></a1></div></div>
		<input type="hidden" name="MM_insert" value="form1" />

		</form>
	</div>