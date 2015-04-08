<!-- Header-->
    <header>
    	<!-- Top Bar -->
    	<div class="top">
 
		
		<div id="middle-column">
	</div>
		<?php
  session_start();
  $username=$_SESSION['CurrentUser'];
  $ques=$_POST["ques"];
  $ans=$_POST["ans"];
  
	$name=$_SESSION['CurrentUserName'];
  
  if(isset($_SESSION['CurrentUser']))
		   {
				if($_SESSION['CurrentUserType']=="admin")
			   {
  				// Create connection
				$con=mysqli_connect("127.0.0.1","root","","school");
				if (mysqli_connect_errno($con))
				{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
				else if (empty($ans)||empty($ques))
				header('Location:add_faq.php'); 
				else
				{
				$result0 = mysqli_query($con,"INSERT into faq(sno,ques,answer)VALUES('','".$ques."','".$ans."')");
				header('Location:add_faq.php');
				}
			}
			   else
				  { echo "not authorised user"; 
				   header('Location:faq.php');
					exit;
		}
		
	}
	mysqli_close($con);
  ?>
 </body>

</html>