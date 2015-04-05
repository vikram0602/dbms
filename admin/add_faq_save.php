<!-- Header-->
    <header>
    	<!-- Top Bar -->
    	<div class="top">
 
		
		<div id="middle-column">
	</div>
		<?php
		include("config.php");
  session_start();
  $username=$_SESSION['CurrentUser'];
  $question=$_POST["ques"];
  $answer=$_POST["ans"];
  
	$name=$_SESSION['CurrentUserName'];
  
  if(isset($_SESSION['CurrentUser']))
		   {
				if($_SESSION['CurrentUserType']=="admin")
			   {
  				// Create connection
				
				if (!$conn)
				{
					echo "Failed to connect to : " ;
				}
				else if (empty($answer)||empty($question))
				header('Location:add_faq.php'); 
				else
				{
		$result = oci_parse($conn,"INSERT INTO faq VALUES(:question,:answer)");
      oci_bind_by_name($result,":question",$question);
      oci_bind_by_name($result,":answer",$answer);
      oci_execute($result);
      oci_free_statement($result);
      oci_close($conn);				
	  header('Location:add_faq.php');
				}
			}
			   else
				  { echo "not authorised user"; 
				   header('Location:index.php');
					exit;
		}
		
	}
	
  ?>
 </body>

</html>