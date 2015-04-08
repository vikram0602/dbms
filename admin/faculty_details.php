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
session_start();
 include_once("config.php");
$con=mysqli_connect($host,$username,"",$database);
if (mysqli_connect_errno($con))
				{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
		else{		
				if(isset($_SESSION['CurrentUser']))
				 {
			
					 if($_SESSION['CurrentUserType']=="admin")
					 {
					  header("location:faculty_details2.php");
						}
				}
				else
				{
	include_once("template1.php");
	$result0 = mysqli_query($con,"SELECT * from faculty_details");
						echo '<div class="Table">';
						echo '<div class="Heading">
								<div class="Cell">Name</div>
								
								<div class="Cell">Designation</div>
 								 </div>';
								 echo "<br>";echo "<br>";
						while($row = mysqli_fetch_array($result0))
  							{
							
							echo '<div class="Row">
    								<div class="Cell">'.$row["Firstname"]."  ".$row["Lastname"].'</div>
  								
									  <div class="Cell">'.$row["description"].'</div>
 								 </div>';
								echo "<br>";echo "<br>";
							}
	echo "</div>";
				}
				mysqli_close($con);
				}	
?>

<?php
include_once("footer.php");
?>