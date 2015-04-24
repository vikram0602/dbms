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
							 if (isset($_GET["station_id"]))
                                                          $station_id = (string)$_GET["station_id"];
                                                        if (isset($_GET["msid"]))
                                                          $msid = (string)$_GET["msid"];
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
									<?php
									  if (isset($_SESSION['CurrentUser'])) {
										if (isset($station_id)) {
									  	  echo "<li><a href=\"tools.php?station_id=$station_id\">Analysis</a></li>";
									  	} else if (isset($msid)) {
									  	  echo "<li><a href=\"tools.php?msid=$msid\">Analysis</a></li>";
										}
										  echo "<li><a href=\"login/logout.php\">Logout</a></li>";
									  } else {
									  	echo "<li><a href=\"index.php#login\">Login</a></li>";
									  }
									 ?>
									<li><a href="contact.php">contact us</a></li>
									<li><a href="stats.php">Statistics</a></li>
									<?php

									//echo $_SESSION["CurrentUserName"];
								//echo '<li><a href="/dbms/admin/adminaccount.php"> hasdhjasdh</a></li>';	//header("location:/dbms/admin/adminaccount.php");

								if(isset($_SESSION['CurrentUser']))
										{
											if($_SESSION['CurrentUserType']=="admin")
												echo '<li><a href="admin/adminaccount.php">'.$_SESSION["CurrentUserName"].'</a></li>';	//header("location:/dbms/admin/adminaccount.php");
											if($_SESSION['CurrentUserType']=="guest")
												echo '<li><a href="guest/guestaccount.php">'.$_SESSION["CurrentUserName"].'</a></li>';
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
						
