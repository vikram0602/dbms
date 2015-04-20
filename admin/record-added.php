<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Added</title>

</head>

<body>
<p>
  <?php include("admin_template.php"); ?>
  
  <?php 

echo "<h1>Record Added Successfully</h1><br>";
?>
</p>
<form action="cUser.php" method="post" name="form3" id="form3">
  <table >
    
    <tr valign="baseline">
      
      <td><input type="submit" value="Create Another User"  /></td>
    </tr>
  </table>
</form>

</body>
</html>