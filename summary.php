<?php
include("noside.php");
include("config.php");
?>
<style>
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
.form-group input {
   display: block;
   max-width: 280px;
   vertical-align: left;
   height: 25px;
   margin: 5px ;
  
   padding: 10px 20px;
 }
</style>
<title>
Summary
</title>
<div align="left">
				<div class="Table">
					<div class="Heading">
								
					<section class="container">
						<div class="form-group" align="left">
								
						<h5 align="left" style="color:#00CC99">Search</h5>
						
						<form role="form" action="search.php" method="post">
						<div class="Cell">
						<input type="text" id="search" placeholder="Enter city" >
						</div>
						<div class="Cell">
						<input type="text"  name="field" />
						</div>
						<div class="Cell">
						<input type="date" name="date1">
						</div>
						<div class="Cell">
							<button type="submit" class="btn btn-default">Search</button>
							</div>
					</form>
						</div>
					</section>
					</div>
					</div>
</div>

<?php
 if ($conn)
   {
	   $b="SELECT * from country";
	   $stid = oci_parse($conn,$b);
	   oci_execute($stid);
	   oci_free_statement($stid);
	  
	  
       //echo "Connected to foo";
	   echo "</table>";
       oci_close($conn);
   }
   else
   {
       die("could not connect to foo");
   }


?>

<?php
include("footer.html");
;
?>