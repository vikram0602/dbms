<title>Create Page</title>
<script type="text/javascript" src="/intern123/ckeditor/ckeditor.js"></script>
  <?php 
include("admin_temp.php");
//echo "<h1>Create Form-</h1>";
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
		if($_POST["MM_insert"] == "form1"){
				$p=GetSQLValueString($_POST['ptype'], "text");
				$p=str_replace("'", "", $p);
				echo $p;
				if($p=="content"){
  $insertSQL = sprintf("INSERT INTO newpage (title, ptype,content, meta, m_desc) VALUES (%s, %s, %s,%s, %s)",
                       GetSQLValueString($_POST['title1'], "text"),
					   GetSQLValueString($_POST['ptype'], "text"),
                       GetSQLValueString($_POST['content'], "text"),
                       GetSQLValueString($_POST['meta1'], "text"),
					   GetSQLValueString($_POST['m_desc'], "text"));
					   }
					 else
					 {
					 $insertSQL = sprintf("INSERT INTO newpage (title, ptype,custom, meta, m_desc) VALUES (%s, %s, %s,%s, %s)",
                       GetSQLValueString($_POST['title1'], "text"),
					   GetSQLValueString($_POST['ptype'], "text"),
                       GetSQLValueString($_POST['custom'], "text"),
                       GetSQLValueString($_POST['meta1'], "text"),
					   GetSQLValueString($_POST['m_desc'], "text"));
					 }  
					    $title= GetSQLValueString($_POST['title1'], "text");
  $Result1 = mysql_query($insertSQL, $con1) or die(mysql_error());
  				
   		}
		$b="SELECT * from newpage where title=".$title;
 $result3 = mysql_query($b, $con1) or die(mysql_error());
$a="";
while($row = mysql_fetch_array($result3))
  							{
							$a=$row['title'];
							}
							 $insertGoTo ="/intern123/normal/name.php?title=".$a;
  echo  $insertGoTo;
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
// header(sprintf("Location: %s", $insertGoTo));

 }
	


?>

<script>
function Select1()
{
document.getElementById("custom").style.visibility="hidden";
document.getElementById("editor1").style.visibility="visible";
}
function Select2()
{
document.getElementById("editor1").style.visibility="hidden";
document.getElementById("custom").style.visibility="visible";
}
</script>
<script type="text/javascript" src="/intern123/ckeditor/ckeditor.js"></script>

<div>

<form id="form1" name="form1" method="post" action="<?php echo $editFormAction; ?>">
  <table width="624" height="304" border="0" >
    <tr valign="baseline">
      <td width="113">Page tiltle </td>
      <td width="501">
        <input type="text" name="title1" />      </td>
    </tr>
    <tr valign="baseline">
      <td>Page Type </td>
     <!-- <td><p>
       <button onclick="Select1()">Content</button>
<button onclick="Select2()">Custom</button>
        <br>
      </p></td>-->
	  <td><input type="radio" name="ptype" value="content" checked="checked" onChange="Select1()" />
            Content
        
          <input type="radio" name="ptype" value="custom" onChange="Select2()" />
            Custom</td>

    </tr>
    <tr valign="baseline">
      <td height="172">Page Content </td>
      <td><select class="input-large" name="custom" id="custom"  style="visibility:hidden;">
	  <?php 
			$d = dir("custom");
			$file = $d->read();$file = $d->read();
			while (($file = $d->read()) !== false){ 
				  echo ' <option value="'.$file.'" >'. $file . '</option><br>'; 
				} 
			$d->close(); 
		?>
</select><br>
	  <textarea class="ckeditor" cols="80" id="editor1" name="content" rows="10" placeholder="Type Content" ></textarea><br>
	  
	  </td>
    </tr>
    <tr valign="baseline">
      <td>meta keywords </td>
      <td><input type="text" name="meta1" /></td>
    </tr>
    <tr>
      <td>meta description </td>
      <td><input type="text" name="m_desc" /></td>
    </tr>
    <tr valign="baseline">
      <td>&nbsp;</td>
      <td>
        <input type="submit" name="Submit" value="Submit" />      </td>
    </tr>
  </table>
    <input type="hidden" name="MM_insert" value="form1" />

</form>
<form action="listpage.php" id="form4" name="form4" method="post" >
 <input align="middle" type="submit" name="Submit" value="List Page" />
</form>
</div>
<?php

include_once("footer.php");
?>
