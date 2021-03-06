<?php
 include_once("config.php");
  session_start();
  
if(!isset($_SESSION['CurrentUser']) || $_SESSION['CurrentUserType']!="guest") {
	 header("location:../login/logout.php");
	 die();
}
 ?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Guest</title>
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
								<h1><a href="../index.php" id="logo">Climatic Research</a></h1>
							
							<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="active"><a href="guestaccount.php">Home</a></li>
									
									<li><a href="post.php">Announcement</a></li>
									<li><a href="edit.php">Edit Profile</a></li>
									<li><a href="../login/logout.php">Logout</a></li>
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
									<h2><?php echo $_SESSION['CurrentUserName']  ?></h2>
								</header>									
								<ul class="default" >
									
									<li class="active"><a href="guestaccount.php">Home</a></li>
									<li><a href="post.php">Announcement</a></li>
									<li><a href="edit.php">Edit Profile</a></li>
									<li><a href="../contact.php">Contact Us</a></li>
									<li><a href="../index.php">Search</a></li>
								</ul>
							</section>
							<section>
								
							</section>
						</div>

						<!-- Content -->
						<div id="content" class="8u skel-cell-important">
							<section>
								
							
