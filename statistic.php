<style type="text/css">
    .Ta
    {
        display: table;
		
		 font-family: "Times New Roman", Times, serif;
		 width: 1000px;
		 padding-top: 200px;
    
    padding-bottom: 200px;
    
		 border-collapse: collapse;
		 border: 1px solid black;
		 text-align:center;

    }
  
    .Heading
    {
        display: table-row;
        font-weight: bold;
        text-align: center;
		font-size:24px;
		color:#760113;
		font-style: italic;
		font-family: "Times New Roman", Times, serif;
    }
    .Ro
    {
        display: table-row;
        text-align: center;
		
    }
    .Ce
    {
        display: table-cell;
        border: solid;
        border-width: thin;
        padding-left: px;

    padding-right: 1px;
		font-size:20px;
		width:20%;
		height:0px;
		
    }
</style>

<?php
$table=$_GET["col"];
if($table==NULL)
	header('Location: stats.php');
//echo $table;
include("noside.php");
include("config.php");
if ($conn)
   {
	  // echo "connected";
	
	 
	 
	 //now we write our query
	 $b="SELECT * from ".$table;
	   $stid = oci_parse($conn,$b);
	   oci_execute($stid);
	   while (($row = oci_fetch_assoc($stid)) != false) {
		   echo '<div class="Ro">';
		   foreach ($row as $value) {
				echo '<div class="Ce">'.$value.'</div>';
		   }
		   echo "</div>";
	   
	   }
	   oci_free_statement($stid);
	    oci_close($conn);
	 include("footer.html");
   }
   else
   {
	   echo "NOt";
   }


?>