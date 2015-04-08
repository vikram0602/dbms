<title>Hall of Fame</title>
<?php


 include_once("template1.php");
 include_once("config.php");
$con=mysqli_connect($host,$username,"",$database);
if (mysqli_connect_errno($con))
				{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
				
				else
				{
				$ab="SELECT * FROM  student_details,  stupercent WHERE student_details.username = stupercent.username AND stupercent.marks >=90";
						$result0 = mysqli_query($con,$ab);
echo '<table width="363" style="font-size:16px;text-align:left;" border="2">';
					while($row = mysqli_fetch_array($result0))
  							{
							echo '<tr >
    <td width="109" height="123"><img src="/intern123/'.$row["imgurl"].'" alt="a" width="109" height="197" /></td>
    <td style="font-size:16px;text-align:left;" width="244">Name:'.$row["firstname"].'	'.$row["lastname"].'<br>Class:'.$row["class"].'<br>Marks:'.$row["marks"].'</td></tr>';
							
							}
							echo "</table>";
				}
				
				mysqli_close($con);
?>


<?php
include_once("footer.php");
?>