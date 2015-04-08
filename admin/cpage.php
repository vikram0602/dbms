<title>Create Page</title>
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
  <?php 
include("admin_template.php");
//echo "<h1>Create Form-</h1>";
include("config.php");
 
?>
<?php


$editFormAction = $_SERVER['PHP_SELF'];

if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}


if (isset($_POST["MM_insert"]))
	{
		if($_POST["MM_insert"] == "form1"){
				$p=$_POST['ptype'];
				$p=str_replace("'", "", $p);
				echo $p;
				if($p=="content"){
  $insertSQL = "INSERT INTO newpage (title, ptype,content, meta, m_desc) VALUES ('".$_POST['title1']."','".$_POST['ptype']."','".$_POST['content']."','".$_POST['meta1']."','".$_POST['m_desc']."')";
                  //echo $insertSQL;
					   }
					 else
					 {
 $insertSQL = "INSERT INTO newpage (title, ptype,custom, meta, m_desc) VALUES ('".$_POST['title1']."','".$_POST['ptype']."','".$_POST['custom']."','".$_POST['meta1']."','".$_POST['m_desc']."')";

					 }  
					    $title= $_POST['title1'];
						$result=oci_parse($conn,$insertSQL);
					oci_execute($result);
  				
   		}
		$b="SELECT * from newpage where title='".$title."'";
 $stid = oci_parse($conn,$b);//parsing your query
	   oci_execute($stid);
$a="";
while($row = oci_fetch_array($stid))
  							{
							$a=$row[0];
							}
							 $insertGoTo ="../name.php?title=".$a;
 // echo  $insertGoTo;
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
//header(sprintf("Location: %s", $insertGoTo));
oci_free_statement($stid);
oci_free_statement($result);

	 oci_close($conn);
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
<h1>CREATE PAGE</h1><br>
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

include_once("footer.html");
?>
