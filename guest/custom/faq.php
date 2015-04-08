<title>FAQ</title>
<?php


 
 include_once("config.php");
$conn = mysql_pconnect($host, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR); 
  mysql_select_db($database, $conn);

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
   echo "<a href='faq.php?page=$page'>Next 			 </a>";
}
else if( $left_rec < $rec_limit || $left_rec <=0)
{

   $last = $page - 2;
   echo "<a href='faq.php?page=$last'>Prev  			</a>";
}
else if( $page > 0 )
{

   $last = $page - 2;
   echo "<a href='faq.php?page=$last'>Prev  			 </a> ";
   echo "<a href='faq.php?page=$page'>Next 			 </a>";
}
				
				mysql_close($conn);
				

?>

