<?php
  session_start();
  $username=(string)$_POST["uname"];
  $usertype=(string)$_POST["utype"];
  $password=(string)$_POST["password"];
  $tablename=$usertype;
  echo $username."  ".$password;
if(isset($_SESSION['CurrentUser']))
{
	if($_SESSION['CurrentUserType']=="admin")
		 header("location:/dbms/admin/adminaccount.php");
	 if($_SESSION['CurrentUserType']=="admin")
		 header("location:/dbms/guest/guestaccount.php");

}	

  // Create connection

  include("config.php");
 if (!$conn)
   {
       echo "Cannot Connect";
	   
      
   }
   
else
	{
		$result0 = oci_parse($conn,"SELECT user_name FROM login WHERE user_name=:uname and user_type=:utype and password=:password" );
                oci_bind_by_name($result0,":uname",$username);
                oci_bind_by_name($result0,":utype",$usertype);
                oci_bind_by_name($result0,":password",$password);
		oci_execute($result0);
		
		
		if($row = oci_fetch_array($result0, OCI_BOTH))
		{
			$result1 = oci_parse($conn,"SELECT name FROM ".$tablename." WHERE user_name='".$username."'");
//			oci_bind_by_name($result1,":username",$username);
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
			//header('Location:login-unsuccessfull.php');
			//exit;
		}
		
		
	}
	oci_close($conn);
  ?>
 </body>
</html>
