<?php
include("guest_template.php");
include("config.php");
?>
<div  align="center">
    	  <form name="form1" method="post" action="postSave.php">
    <h1 class="style2" > AddPost</h1>
    <p>
	<textarea class="ckeditor" cols="10" id="editor1" name="editor1" rows="5" placeholder="Whats on Your mind!"  ></textarea>
      <input type="submit" name="Submit" value="POST" onfocus="red" />
    </p>
    <p>&nbsp;</p>
  </form>
</div>

<?php
$username=$_SESSION['CurrentUser'];
  

if($conn){
$b="SELECT * FROM announcement  ORDER BY TIME_STAMP DESC";//writing a query we want to execute, store in a variable for convenience!
	   
	   $stid = oci_parse($conn,$b);//parsing your query
	   oci_execute($stid);// execute that parsed query
	   echo '<table width="672" height="103" border="0">';
					$count =0;
	   while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {// getting your results in row 
								echo '<tr>
    							<td width="507"><h1 class="style3" width=300 align="left"><font color="003300" align="centre">'.ucfirst($row[3]).'</h1></td>
    							<td width="112">'.$row[2].'</td></tr>';
								
								echo '<tr>
										
    									<td colspan="2"><p1 class="style4"><font color="008AE6" align="centre">'. ucfirst($row[1]).'</p1></td>
  											</tr>';
											echo '<tr>
    												<td colspan="3">&nbsp;</td>
  														</tr>';
														$count++;
			
    }
		echo "</table>";
					if($count==0)
								{
									echo "<h1>no data found</h1>";
								}
	   echo "</br>";
	   
	 
	 
	 
	 //closing connection
	 oci_free_statement($stid);
	 oci_close($conn);
		   
}
else
	echo "not connected";

include("footer.html");
?>