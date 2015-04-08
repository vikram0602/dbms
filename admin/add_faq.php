<title>FAQ</title>
<?php
//session_start();
$updrec="";
include("admin_temp.php");
require_once("config.php");
 $conn = mysql_pconnect($host, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR); 
  mysql_select_db($database, $conn)
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
    <p class="style2" > Add Faq </p>
    <table width="490" height="105" border="0">
      <tr>
        <td class="style3" width="317">Question:</td>
        <td class="style3" width="163">Answer:</td>
      </tr>
      <tr>
        <td><textarea class="ckeditor" cols="30" id="editor1" name="ques" rows="5" placeholder="Type Question"  ></textarea></td>
        <td><textarea class="ckeditor" cols="30" id="textarea" name="ans" rows="5" placeholder="Type Answer"  ></textarea></td>
      </tr>
    </table>
    <span class="style2">
    <input type="submit" name="Submit" value="POST" onFocus="red" />
    </span>
    <p class="style2" >&nbsp;</p>
    <p>:
	<!--<meta http-equiv="refresh" content="15"/>-->
    </p>
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
$b = "SELECT count(ques) FROM faq";
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

  				
				$b="SELECT * from faq LIMIT $offset, $rec_limit";
 $result3 = mysql_query($b, $conn) or die(mysql_error());

$a=$offset+1;
		
						while($row= mysql_fetch_array($result3))
  							{
							
								echo "<content style='font-size:20px; color: #A80000;text-align:justify;  '>".$a.").".$row['ques']."</content><br>";
								echo "<content style='font-size:18px;'>"."Ans).".$row['answer']."</content>";
								echo "<br>";echo "<br>";
								 $a++;
							}
							$left_rec-=2;
if( $page == 0 )
{
   echo "<a href='add_faq.php?page=$page'>Next 			 </a>";
}
else if( $left_rec < $rec_limit || $left_rec ==0)
{

   $last = $page - 2;
   echo "<a href='add_faq.php?page=$last'>Prev  			</a>";
}
else if( $page > 0 )
{

   $last = $page - 2;
   echo "<a href='add_faq.php?page=$last'>Prev  			 </a> ";
   echo "<a href='add_faq.php?page=$page'>Next 			 </a>";
}
				
				mysql_close($conn);
	}
	else
	{
	echo "not authorised user"; 
				   header('Location:faq.php');
					exit;
	}
	include("footer.php");
    ?>
	</div>
</body>
</html>