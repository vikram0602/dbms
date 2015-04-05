<?php
 include_once("config.php");
  session_start();
  
if(!isset($_SESSION['CurrentUser']) || $_SESSION['CurrentUserType']!="admin")
	 header("location: login/logout.php");
 ?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Admin</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="/dbms/css/ie/html5shiv.js"></script><![endif]-->
		<script src="/dbms/js/jquery.min.js"></script>
		<script src="/dbms/js/jquery.dropotron.min.js"></script>
		<script src="/dbms/js/skel.min.js"></script>
		<script src="/dbms/js/skel-layers.min.js"></script>
		<script src="/dbms/js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="/dbms/css/skel.css" />
			<link rel="stylesheet" href="/dbms/css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="/dbms/css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header Wrapper -->
			<div class="wrapper style1">
			
				<!-- Header -->
					<div id="header">
						<div class="container">
								
							<!-- Logo -->
								<h1><a href="#" id="logo">Climatic Research</a></h1>
							
							<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="active"><a href="adminaccount.php">Home</a></li>
									<li>
										<a href="cpage.php">Create Page</a>
									</li>
									<li><a href="add_faq.php">FAQs</a></li>
									<li><a href="edit.php">Edit Profile</a></li>
									<li><a href="logout.php">Logout</a></li>
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
								</ul>
							</section>
							<section>
								
							</section>
						</div>

						<!-- Content -->
						<div id="content" class="8u skel-cell-important">
							<section>
								
							