<title>FAQ</title>
<?php
//session_start();
$updrec="";
include("admin_template.php");
require_once("config.php");

?>
<body>

	<style type="text/css">
<!--
.style2 {font-family: Georgia, "Times New Roman", Times, serif;font-size: 24px}
.style3 {font-family:Georgia, "Times New Roman", Times, serif;font-size: 16px}
.style4 {font-size: 18px}
-->
    </style>

        </style>
		<div  align="center">
    	  <form name="form1" method="post" action="add_faq_save.php">
    <h1 class="style2" > Add Faq </h1>
    <table width="490" height="105" border="0">
      <tr>
        <td class="style3" width="317"><h1>Question:</h1></td>
		 <td>
    &nbsp;

	  </td>
        <td class="style3" width="163"><h1>Answer:</h1></td>
      </tr>
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <tr>
        <td><textarea class="ckeditor" cols="35" id="editor1" name="ques" rows="5" placeholder="Type Question"  ></textarea></td>
		 <td>
    <p class="style2" >&nbsp;</p>

	  </td>
        <td><textarea class="ckeditor" cols="30" id="textarea" name="ans" rows="5" placeholder="Type Answer"  ></textarea></td>
     
	  </tr>
    </table>
    <span class="style2">
<button type="submit" class="btn btn-default">SUBMIT</button>    </span>
    &nbsp;
    
  </form>
</div>

<div>

        <?php
  //session_start();
  $username=$_SESSION['CurrentUser'];
  


if(isset($_SESSION['CurrentUser']) && $_SESSION['CurrentUserType']=="admin")
		   {
			
			   $rec_limit = 2;


/* Get total number of records */
$a="SELECT * from faq";
	   $result2 = oci_parse($conn,$a);
	   oci_execute($result2);

		$z=0;
						while($row= oci_fetch_array($result2, OCI_BOTH))
  							{
							$z++;
								echo "<content style='font-size:20px; color: #A80000;text-align:justify;  '>Q".$z.").".$row[0]."</content><br>";
								echo "<content style='font-size:18px;'>"."Ans).".$row[1]."</content>";
								echo "<br>";echo "<br>";
								 $a++;
							}
	
				oci_free_statement($result2);
				//oci_free_statement($result3);  				
				oci_close($conn);
	}
	else
	{
	echo "not authorised user"; 
				   header('Location:/dbms/faq.php');
					exit;
	}
	include("footer.html");
    ?>
	</div>
</body>
</html>