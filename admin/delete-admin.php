<?php  
include("admin_template.php");
include("config.php");
 ?>
<?php
$a=$_GET['col'];
if ((isset($_GET['col'])) && ($_GET['col'] != "")) {
  $b = "DELETE FROM admin WHERE user_name=".$a.;
					   $stid = oci_parse($conn,$b);//parsing your query
						oci_execute($stid);
					   $c = "DELETE FROM login WHERE user_name=".$a.;
						$stid1 = oci_parse($conn,$c);//parsing your query
						oci_execute($stid1);
				

  $deleteGoTo = "record-deleted.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}
?>
