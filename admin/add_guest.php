<?php
include_once("admin_template.php");
 include("config.php");
 
 $username=$_POST['username'];
 if($username==NULL)
			header("Location: adminaccount.php");
	$name=$_POST['Firstname'];
	$email=$_POST['email_id'];
	$contact=$_POST['contact_no'];
	echo $username;
	
	if($conn)
	{
		$insertSQL = "INSERT INTO guest (user_name, name,email, contact) VALUES ('".$username."','".$name."','".$email."',".$contact.")";
					   
					     $pass=rand();
  $insertSQL1="insert into login values('".$username."','".$pass."','guest')";
  echo $_POST['Username'];
  $stid = oci_parse($conn,$insertSQL);//parsing your query
						oci_execute($stid);
						 $stid1 = oci_parse($conn,$insertSQL1);//parsing your query
						oci_execute($stid1);
						oci_free_statement($stid);
						oci_free_statement($stid1);
						/*
			$to=$email;

			$subject="User Registered on CR SYS";

			// From
			$header="from: vikram_guest<vikram0602@gmail.com>";

			// Your message	
			$message="Your Account Has been Created on CR SYS  Welcome to The Hub..!!\r\n";
			$message.="Username:".$_POST['Username'];
			$message.="Password:".$pass;
*/
			// send email
			//$sentmail = mail($to,$subject,$message,$header);

	

oci_close($conn);
 
  header("Location: record-added.php");
	}
	else
	{
		echo "Not";
	}
 
 
 ?>