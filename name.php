<?php 

include("template.php");
//$user=$_SESSION["CurrentUser"];
include('config.php');
if(isset($_GET["title"]))
	$title=$_GET["title"];
	
	
if(!$conn)
{
	echo "NOT CONNECTED";
}
else
{
$b = "SELECT * from newpage where title=:title";
//echo $b;
 $stid = oci_parse($conn,$b);//parsing your query
 oci_bind_by_name($stid,":title",$title);
	   oci_execute($stid);// execute that parsed query
	   $row = oci_fetch_array($stid, OCI_BOTH)
//$row = oci_fetch_assoc($stid);
//$totalRows_Recordset1 = oci_num_rows($stid);	
	
	
	
?>

<head>
<meta http-equiv="<?php echo htmlentities($row[4], ENT_COMPAT, 'utf-8'); ?>" content="<?php echo htmlentities($row[5], ENT_COMPAT, 'utf-8'); ?>" />
<title><?php echo htmlentities($row[0], ENT_COMPAT, 'utf-8'); ?></title>
</head>

<body>
<div style=" width:1000px;">

<p>

<?php
$p=htmlentities($row[1], ENT_COMPAT, 'utf-8');
	if($p=="content"){
	
		echo $row[2];
		}
	else
	{
	$c="admin/custom/".htmlentities($row[3], ENT_COMPAT, 'utf-8');
	
	include($c);
	}
	
 ?>

</p>
</div>
</body>
<?php


oci_free_statement($stid);
	 oci_close($conn);
	 }
	 include("footer.html");
?>

