<!DOCTYPE HTML>
<html>
	<head>
		<title>Climatic Research</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<script>
		$('a[href^="#"]').on('click', function(event) {

    var target = $( $(this).attr('href') );

    if( target.length ) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 1000);
    }

});
		</script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="homepage">

		<!-- Header Wrapper -->
			<div class="wrapper style1">
			
			<!-- Header -->
				<div id="header">
					<div class="container">
							
						<!-- Logo -->
							<h1><a href="index.php" id="logo">Climatic Research</a></h1>
						
						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="active"><a href="index.php">Home</a></li>
									<li>
										<a href="#about">About Us</a>
									</li>
									<li><a href="faq.php">FAQs</a></li>
									<li><a href="#login">Login</a></li>
									<li><a href="contact.php">contact us</a></li>
									<li><a href="terms.php">Terms of Use</a></li>
									<?php
									  session_start();

									//echo $_SESSION["CurrentUserName"];
								//echo '<li><a href="/dbms/admin/adminaccount.php"> hasdhjasdh</a></li>';	//header("location:/dbms/admin/adminaccount.php");

								if(isset($_SESSION['CurrentUser']))
										{
											if($_SESSION['CurrentUserType']=="admin")
												echo '<li><a href="/dbms/admin/adminaccount.php"> welcome:  '.$_SESSION["CurrentUserName"].'</a></li>';	//header("location:/dbms/admin/adminaccount.php");
											if($_SESSION['CurrentUserType']=="guest")
												echo '<li><a href="/dbms/guest/guestaccount.php">welcome:  '.$_SESSION["CurrentUserName"].'</a></li>';
											}	
								?>
								</ul>
								
							</nav>
	
					</div>
				</div>
				
			<!-- Banner -->
				<div id="banner">
					<section class="container">
						<h2>Climatic Research</h2>
						<span>Get started</span>
						<form role="form" action="pre_search.php" method="post">
						<input type="text" class="form-control" name="city" id="email" placeholder="Enter city, state, zip code, or other location information..." >
						</form>
						<p></p>
					</section>
				</div>

			</div>
		
		<!-- Section One -->
			<div class="wrapper style3">
				<section class="container">
					<div class="row double">
						<div class="6u">
							<header class="major">
								<h2>Analyse the weather </h2>
								<span class="byline">Study the changing trends of weather. get the historical weather data. Climate Predictions based on calculating and analysing the past data . Reliable and fast .</span>
							</header>
						</div>
						<div class="6u">
							<h3>Climatological Research system </h3>
							<p>Using real weather data crunched within our own database. Ask interesting questions about the past or know the future. All in one click, simple and easy to use interface. Subscribe to your favourite cities, get suggestion and announcement.</p>
							<a href="#" class="button">GET STARTED NOW !</a>
						</div>
					</div>
				</section>
			</div>

		<!-- Section Two -->
			<div class="wrapper style2" id="login">
				<section class="container">
					<header class="major">
						<h2 align="center">Log in</h2>
					</header>
				 <form role="form" action="login/login1.php" method="post">
        <div class="form-group">
          <label for="email">Username:</label>
          <input type="text" name="uname" class="form-control" id="email" placeholder="Enter username" >
        </div>
		</br>
		<div class="form-group">
		 <label for="usertype">Usertype:</label>
		 <select class="input-large" name="utype"   >
		  
            <option value="admin" >Admin</option>
			<option value="guest" selected="selected" >Guest</option>
            
			
          </select>
        </div>
		</br>
		<div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd" name='password' placeholder="Enter password">
        </div>
		</br>
			<div>
					
				<button type="submit" class="btn btn-default">Sign In</button>
				
				<button type="button" class="btn btn-default">
				<a href="login/forget.php" title="Login" rel="home" >Forget Password</a>
				</button>
				<button type="button" class="btn btn-default">
				<a href="login/signup.php" title="signup" rel="home" >Not A Member Yet!</a>
				</button>
			
			</div>	
      </form>
				</section>
			</div>

		
		<!-- Team -->
			<div class="wrapper style5" id="about">
				<section id="team" class="container">
					<header class="major">
						<h2 >About Us</h2>
						<span class="byline">Want to know more about us</span>
					</header>
					<div class="row">
						<div class="4u">
							<a href="#" class="image"><img src="images/placeholder.png" alt=""></a>
							<h3>James Birdsong</h3>
							<p>Backend Developer</p>
						</div>
						<div class="4u">
							<a href="#" class="image"><img src="images/placeholder.png" alt=""></a>
							<h3>Ashish Agarwal</h3>
							<p>Project manager</p>
						</div>
						<div class="4u">
							<a href="#" class="image"><img src="images/placeholder.png" alt=""></a>
							<h3>Sanjay</h3>
							<p>Associate Frontend Developer</p>
						</div>
						<div class="4u">
							<a href="#" class="image"><img src="images/placeholder.png" alt=""></a>
							<h3>Vikram khurana</h3>
							<p>Lead Frontend Developer</p>
						</div>
						<div class="4u">
							<a href="#" class="image"><img src="images/placeholder.png" alt=""></a>
							<h3>Dr. Markus Schneider</h3>
							<p>Class Instructor</p>
						</div>
						<div class="4u">
							<a href="#" class="image"><img src="images/placeholder.png" alt=""></a>
							<h3>Siliang Xia</h3>
							<p>Project Assessment and Inspiration</p>
						</div>
					</div>
				</section>
			</div>

	<!-- Footer -->
		<div id="footer">
			<section class="container">
				<header class="major">
					<h2>Connect with us</h2>
					<span class="byline">Know us better</span>
				</header>
				<ul class="icons">
					<li class="active"><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
					<li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
					<li><a href="#" class="fa fa-dribbble"><span>Pinterest</span></a></li>
					<li><a href="#" class="fa fa-google-plus"><span>Google+</span></a></li>
				</ul>
				<hr />
			</section>
			
			<!-- Copyright -->
				<div id="copyright">
					Design: Vikram and co.				</div>			
		</div>

	</body>
</html>
