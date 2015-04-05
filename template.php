<!DOCTYPE HTML>

<html>
	<head>
		<title>Climate System</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header Wrapper -->
			<div class="wrapper style1">
			
				<!-- Header -->
					<div id="header">
						<div class="container">
								
							<!-- Logo -->
							<?php session_start();
							if (isset($_SESSION['CurrentUser'])) {
								echo "<h1><a href=\"index.php\" id=\"logo\">CR Sys</a></h1>";
							} else {
								echo "<h1><a href=\"index.php\" id=\"logo\">Climate System</a></h1>";
							}
							?>
							<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="active"><a href="index.php">Home</a></li>
									<li>
										<a href="index.php#about">About Us</a>
									</li>
									<li><a href="faq.php">FAQs</a></li>
									<li><a href="index.php#login">Login</a></li>
									<li><a href="contact.php">contact us</a></li>
									<li><a href="terms.php">Terms of Use</a></li>
									<?php
									//echo $_SESSION["CurrentUserName"];
								//echo '<li><a href="/dbms/admin/adminaccount.php"> hasdhjasdh</a></li>';	//header("location:/dbms/admin/adminaccount.php");

								if(isset($_SESSION['CurrentUser']))
										{
											if($_SESSION['CurrentUserType']=="admin")
												echo '<li><a href="/dbms/admin/adminaccount.php">'.$_SESSION["CurrentUserName"].'</a></li>';	//header("location:/dbms/admin/adminaccount.php");
											if($_SESSION['CurrentUserType']=="guest")
												echo '<li><a href="/dbms/guest/guestaccount.php">'.$_SESSION["CurrentUserName"].'</a></li>';
											}	
								?>
								</ul>
							</nav>
							</div>
					</div>
			</div>
		
		<!-- Main -->
			<div id="main" class="wrapper style4">
				<div class="container">
					<div class="row">

						<!-- Sidebar -->
						<div id="sidebar" class="4u" style="background-color:#003300">
							<section>
								<header class="major">
									<h2>Template for Pages</h2>
								</header>									
								<ul class="default" >
									<li class="active"><a href="index.php">Home</a></li>
									<li>
										<a href="index.php#about">About Us</a>
									</li>
									<li><a href="faq.php">FAQs</a></li>
									<li><a href="index.php#login">Login</a></li>
									<li><a href="contact.php">contact us</a></li>
									<li><a href="terms.php">Terms of Use</a></li>
									<?php
include('config.php');

if ($conn)
				{
					 $b="SELECT * from newpage";//writing a query we want to execute, store in a variable for convenience!
	   $stid = oci_parse($conn,$b);//parsing your query
	   oci_execute($stid);// execute that parsed query
						while($row = oci_fetch_array($stid,OCI_BOTH))
  							{
							
						echo '<li><a href="name.php?title='.$row["0"].'"title="'.$row["0"].'">'.$row["0"].'</a></li>';
								
							}
							 oci_free_statement($stid);
	 oci_close($conn);
					
					
				}
else
				{
						echo "Failed to connect : ";
				}
				
				
?>
									
								</ul>
							</section>
							<section>
								
							</section>
						</div>

						<!-- Content -->
						<div id="content" class="8u skel-cell-important">
							<section>
								
							