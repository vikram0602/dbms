<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Contact Queries</title>
</head>
<?php
//session_start();
$updrec="";
include("admin_temp.php");

?>
	<style type="text/css">
    .Table
    {
        display: table;
		padding-bottom:5px;
		padding-top: 5px;
    }
  
    .Heading
    {
        display: table-row;
        font-weight: bold;
        text-align: center;
		font-size:24px;
		color:#760113;
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
<?php
include_once("config.php");
$con=mysqli_connect($host,$username,"",$database);
if (mysqli_connect_errno($con))
				{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}

				else
				{
						$result0 = mysqli_query($con,"SELECT * from contact order by sno DESC");
						
						echo '<div class="Table" >';
						echo '<div class="Heading"><div class="Cell" >Name</div><div class="Cell" >Email</div><div class="Cell" >Query</div>
								<div  class="Cell" >Date'.'</div>	</div> ';
						while($row = mysqli_fetch_array($result0))
  							{
							
							echo '<div class="Row">
    								<div  class="Cell">'.$row["name"].'</div><div  class="Cell">'.$row["email_id"].'</div><div  class="Cell">'.$row["comment"].'</div>  <div class="Cell">'.$row["datep"].'</div></div>';
						
							}
	echo "</div>";
				}
mysqli_close($con);
?>


<?php
include_once("footer.php");
?>
	
<body>
</body>
</html>
