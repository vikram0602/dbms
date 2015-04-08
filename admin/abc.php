<html>
<head>
<title>Admin Details</title>
</head>
<body>
<?php
include_once("admin_temp.php");
require_once("config.php");
 $conn = mysql_pconnect($host, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR); 
  mysql_select_db($database, $conn);


$rec_limit = 2;


/* Get total number of records */
$b = "SELECT count(username) FROM admin_details";
 $result3 = mysql_query($b, $conn) or die(mysql_error());
$row= mysql_fetch_array($result3);
$rec_count = $row[0];

if( isset($_GET{'page'} ) )
{
   $page = $_GET{'page'} + 1;
   $offset = $rec_limit * $page ;
}
else
{
   $page = 0;
   $offset = 0;
}
$left_rec = $rec_count - ($page * $rec_limit);

$b="SELECT * from admin_details LIMIT $offset, $rec_limit";
 $result3 = mysql_query($b, $conn) or die(mysql_error());

$a=$offset+1;
echo '<table border=2 ><tr ><td>Sno.</td><td>Admin Id:</td><td>Name</td><td>Contact No.</td><td>Email_ID</td><td>Edit</td><td>Delete</td></tr>';
while($row= mysql_fetch_array($result3))
{
    	echo "<tr ><td><b>".$a.".</b></td>";
									echo "<td>".$row[0]."</td>";
									echo "<td>".$row[1]." ".$row[2]."</td>";
									echo "<td>+91-".$row[4]."</td>";
									echo "<td>".$row[3]."</td>";	
									echo '<td><a href="edit-admin1.php?col='.$row[0].'">Edit</td>';
									echo '<td><a href="delete-admin.php?col='.$row[0].'">Delete</td></tr>';
		 $a++;
} 
echo "</table>";
$left_rec-=2;
if( $page == 0 )
{
   echo "<a href='abc.php?page=$page'>Next 			 </a>";
}
else if(  $left_rec <=0)
{
//echo $left_rec;
   $last = $page - 2;
   echo "<a href='abc.php?page=$last'>Prev  			</a>";
}
else if( $page > 0 )
{

   $last = $page - 2;
   echo "<a href='abc.php?page=$last'>Prev  			 </a> ";
   echo "<a href='abc.php?page=$page'>Next 			 </a>";
}
mysql_close($conn);
include_once("footer.php");
?>