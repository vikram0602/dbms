
<script>
function alertFun()
{
	alert("Query has been submitted.....Thank You!");
	return true;
}
</script>

<?php

 require_once("config.php");
 $con1 = mysql_pconnect($host, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR); 
  mysql_select_db($database, $con1);
 ?>
 
<?php

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


			$datep=date("Y-m-d");
			//echo $datep;
	if($_POST["MM_insert"] == "form1"){
  $insertSQL = sprintf("INSERT INTO contact (name, email_id, comment,datep) VALUES (%s, %s, %s, %s)",
                       GetSQLValueString($_POST['name'], "text"),
						GetSQLValueString($_POST['email_id'], "text"),
                       GetSQLValueString($_POST['comment'], "text"),
					    GetSQLValueString($datep, "date"));
					   
					    
  $Result1 = mysql_query($insertSQL, $con1) or die(mysql_error());
  
   		}
		}
		
		?>
<body>

<h3 align="center" style="color:
#990000">Contact Us :</h3>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1" onsubmit="return alertFun()">
 
  <div>
  <table width="200" border="0" >
    <tr>
      <td><span class="style1">NAME: </span></td>
      <td><span class="style1">
        <input type="text" name="name" />
      </span></td>
    </tr>
    <tr>
      <td><span class="style1">E-MAIL:</span></td>
      <td><span class="style1">
        <input type="text" name="email_id" />
      </span></td>
    </tr>
    <tr>
      <td><span class="style1">COMMENT:
          <label></label>
      </span><br /></td>
      <td><textarea class="ckeditor" cols="30" id="editor1"  name="comment" rows="7" placeholder="Type Query"></textarea></td>
    </tr>
    <tr>
      <td><input name="submit" type="submit" value="Send" /></td>
      <td><input name="reset" type="reset" value="Reset" /></td>
    </tr>
  </table>
  </div>
  <input type="hidden" name="MM_insert" value="form1" />
  </form>
  
  
  

</body>
</html>
