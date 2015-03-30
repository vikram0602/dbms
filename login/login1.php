<?php
  session_start();
  $username=$_POST["uname"];
  $usertype=$_POST["utype"];
  $password=$_POST["password"];
  $tablename=$usertype;
  
  echo $username;
  echo $usertype;
  echo $password;
  echo $tablename;
	


  // Create connection

  include("config.php");
 if (!$conn)
   {
       echo "Cannot Connect";
	   
      
   }
   
else
	{
		
		$result0 = oci_parse($conn,"SELECT user_name FROM login WHERE user_name='".$username."' and user_type='".$usertype."' and password='".$password."'" );
		oci_execute($result0);
		
		
		if($row = oci_fetch_array($result0, OCI_BOTH))
		{
			
			$result1 = oci_parse($conn,"SELECT name FROM ".$tablename." WHERE user_name='".$username."'");
			oci_execute($result1);
			if($row1=oci_fetch_array($result1, OCI_BOTH));
			{
				$_SESSION['CurrentUser']=$username;
				$_SESSION['CurrentUserName']=$row1[0];
				$_SESSION['CurrentUserType']=$usertype;
				echo $_SESSION['CurrentUserName'];
				 echo $_SESSION['CurrentUserType'];
				if($_SESSION['CurrentUserType']=="guest")
				{
					header('Location:/dbms/guest/guestaccount.php');
					exit;
				}
				
				else if($_SESSION['CurrentUserType']=="admin")
				{
					header('Location:/dbms/admin/adminaccount.php');
					exit;
				}
			}
			
			
			
		}
		else
		{
			header('Location:login-unsuccessfull.php');
			exit;
		}
		
		
	}
	oci_close($conn);
  ?>
 </body>
</html>
