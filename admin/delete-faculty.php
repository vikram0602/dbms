<?php  require_once("config.php");
 $con1 = mysql_pconnect($host, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR); 
  mysql_select_db($database, $con1); ?>
<?php
include("admin_temp.php");
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

if ((isset($_GET['col'])) && ($_GET['col'] != "")) {
  $deleteSQL = sprintf("DELETE FROM faculty_details WHERE username=%s",
                       GetSQLValueString($_GET['col'], "text"));
  $deleteSQL1 = sprintf("DELETE FROM login WHERE username=%s",
                       GetSQLValueString($_GET['col'], "text"));

  mysql_select_db($database_con1, $con1);
  $Result1 = mysql_query($deleteSQL, $con1) or die(mysql_error());
  $Result1 = mysql_query($deleteSQL1, $con1) or die(mysql_error());

  $deleteGoTo = "record-deleted.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}
?>

<style>

<body>
</body>
</html>