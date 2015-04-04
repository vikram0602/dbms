<!DOCTYPE HTML>

<html>
	<head>
		<title>TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
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
								<h1><a href="#" id="logo">CR</a></h1>
							
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
									  session_start();

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

				<!-- Content -->
				<div id="content" class="container">
					<section>
						