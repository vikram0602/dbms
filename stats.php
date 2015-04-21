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
		width: 20%;
		height:0px;
		
    }
</style>


<?php
include("noside.php");
if (!isset($_SESSION["CurrentUserType"])) {
  header("Location:index.php#login");
  die();
}
include("config.php");
if ($conn)
   {
	  // echo "connected";
	 echo'<div class="Heading">
								<div class="Ce">Table Name</div>
								
								<div class="Ce">No. of Tuples</div><div class="Ce">View Option</div></div>';
	 
	 
	 //now we write our query
	 $b="SELECT count(*) from climate_data";
	   $stid = oci_parse($conn,$b);
	   oci_execute($stid);
	   $row = oci_fetch_array($stid, OCI_BOTH);
	   
	   echo '<div class="Ro"><div class="Ce">Climate_data</div><div class="Ce">'.$row[0].'</div><div class="Ce"><a href="statistic.php?col=climate_data">Click Here!</a></div></div>';
	    oci_free_statement($stid);
		 
	   $b="SELECT count(*) from station_table";
	   $stid = oci_parse($conn,$b);
	   oci_execute($stid);
	   $row = oci_fetch_array($stid, OCI_BOTH);
	echo '<div class="Ro"><div class="Ce">Station_table</div><div class="Ce">'.$row[0].'</div><div class="Ce"><a href="statistic.php?col=station_table">Click Here!</a></div></div>';
	    oci_free_statement($stid);
		$b="SELECT count(*) from announcement";
	   $stid = oci_parse($conn,$b);
	   oci_execute($stid);
	   $row = oci_fetch_array($stid, OCI_BOTH);
	echo '<div class="Ro"><div class="Ce">Announcement</div><div class="Ce">'.$row[0].'</div><div class="Ce"><a href="statistic.php?col=Announcement">Click Here!</a></div></div>';
	    oci_free_statement($stid);
		$b="SELECT count(*) from Admin";
	   $stid = oci_parse($conn,$b);
	   oci_execute($stid);
	   $row = oci_fetch_array($stid, OCI_BOTH);
	echo '<div class="Ro"><div class="Ce">Admin</div><div class="Ce">'.$row[0].'</div><div class="Ce"><a href="statistic.php?col=admin">Click Here!</a></div></div>';
	    oci_free_statement($stid);
		$b="SELECT count(*) from guest";
	   $stid = oci_parse($conn,$b);
	   oci_execute($stid);
	   $row = oci_fetch_array($stid, OCI_BOTH);
	echo '<div class="Ro"><div class="Ce">Guest</div><div class="Ce">'.$row[0].'</div><div class="Ce"><a href="statistic.php?col=guest">Click Here!</a></div></div>';
	    oci_free_statement($stid);
		$b="SELECT count(*) from login";
	   $stid = oci_parse($conn,$b);
	   oci_execute($stid);
	   $row = oci_fetch_array($stid, OCI_BOTH);
	echo '<div class="Ro"><div class="Ce">Login</div><div class="Ce">'.$row[0].'</div><div class="Ce"><a href="statistic.php?col=login">Click Here!</a></div></div>';
	    oci_free_statement($stid);
		$b="SELECT count(*) from contact";
	   $stid = oci_parse($conn,$b);
	   oci_execute($stid);
	   $row = oci_fetch_array($stid, OCI_BOTH);
	echo '<div class="Ro"><div class="Ce">Contact</div><div class="Ce">'.$row[0].'</div><div class="Ce"><a href="statistic.php?col=contact">Click Here!</a></div></div>';
	    oci_free_statement($stid);
		$b="SELECT count(*) from faq";
	   $stid = oci_parse($conn,$b);
	   oci_execute($stid);
	   $row = oci_fetch_array($stid, OCI_BOTH);
	echo '<div class="Ro"><div class="Ce">FAQ</div><div class="Ce">'.$row[0].'</div><div class="Ce"><a href="statistic.php?col=faq">Click Here!</a></div></div>';
	    oci_free_statement($stid);
		$b="SELECT count(*) from newpage";
	   $stid = oci_parse($conn,$b);
	   oci_execute($stid);
	   $row = oci_fetch_array($stid, OCI_BOTH);
	echo '<div class="Ro"><div class="Ce">New-Page</div><div class="Ce">'.$row[0].'</div><div class="Ce"><a href="statistic.php?col=newpage">Click Here!</a></div></div>';
	    oci_free_statement($stid);
		  
		  $b="SELECT count(*) from advice";
	   $stid = oci_parse($conn,$b);
	   oci_execute($stid);
	   $row = oci_fetch_array($stid, OCI_BOTH);
	echo '<div class="Ro"><div class="Ce">Advice</div><div class="Ce">'.$row[0].'</div><div class="Ce"><a href="statistic.php?col=Advice">Click Here!</a></div></div>';
	    oci_free_statement($stid);
	
	 
	 echo "</div></br>";
	 //closing connection
	
	 oci_close($conn);
	 include("footer.html");
   }
   else
   {
	   echo " NOT";
   }
?>
