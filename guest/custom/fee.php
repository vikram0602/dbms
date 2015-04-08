<title>FEE details</title>
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
						$result0 = mysqli_query($con,"SELECT * from fee");
						
						echo '<div class="Table" >';
						echo '<div class="Heading"><div class="Cell" >Class</div>
								<div  class="Cell" >Fees'.'</div>	</div> ';
						while($row = mysqli_fetch_array($result0))
  							{
							
							echo '<div class="Row">
    								<div  class="Cell">Class:'.$row["class"].'</div>
  									  <div class="Cell">'.$row["fees"].'</div></div>';
								
							}
	echo "</div>";
				}
mysqli_close($con);
?>

