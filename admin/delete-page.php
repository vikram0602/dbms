<?php  require_once("config.php");
 ?>
<?php

session_start();
if(!isset($_SESSION["CurrentUserType"])) {
  die();
}

if ((isset($_GET['title'])) && ($_GET['title'] != "")) {
  $b ="DELETE FROM newpage WHERE title='".$_GET['title']."'";
                       
					  $stid = oci_parse($conn,$b);//parsing your query
	   oci_execute($stid);
  
  

  $deleteGoTo = "listpage.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}
?>
