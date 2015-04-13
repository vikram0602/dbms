
		<?php
		session_start();
  if(isset($_SESSION['CurrentUser']))
{
	if($_SESSION['CurrentUserType']!="admin")
		 header("Location:../index.php");
	 

}	
  $username=$_SESSION['CurrentUser'];
  $message=$_POST["editor1"];
  	  echo $message;

  if($message==NULL)
  {
	  header('Location:../admin/post.php');
  }
	else
	{
  $date=date("d-m-Y");
  //echo $date;
	$name=$_SESSION['CurrentUserName'];
  include("config.php");
  
				$b="INSERT into announcement(id,text,time_stamp,name) VALUES('".$username."','".$message."',to_date('".$date."','dd-mm-yyyy'),'".$name."')";
			
			$stid=oci_parse($conn,$b);
			oci_execute($stid);	
			oci_free_statement($stid);
			oci_close($conn);
			$k='post.php';
			header('Location:'.$k);
				
	}
  ?>
