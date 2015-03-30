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
							<h1><a href="#" id="logo">Climatic Research</a></h1>
						
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
								</ul>
							</nav>
	
					</div>
				</div>
				
			<!-- Banner -->
				<div id="banner">
					<section class="container">
						<h2>Climatic Research</h2>
						<span>Get started</span>
						<form role="form" action="temp2.php" method="post">
						<input type="text" class="form-control" name="city" id="email" placeholder="Enter city" >
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
								<h2>Pellentesque viverra vulputate enim. Aliquam volutpat. Pellentesque tristique Risus</h2>
								<span class="byline">In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Donec pulvinar ullamcorper metus.</span>
							</header>
						</div>
						<div class="6u">
							<h3>Suspendisse dictum porta</h3>
							<p>Donec leo. Vivamus fermentum nibh in augue. Praesent a lacus at urna congue rutrum. Nulla enim eros, porttitor eu, tempus id, varius non, nibh. Vestibulum imperdiet, magna nec eleifend semper augue mattis wisi maecenas ligula nunc lectus vestibulum euismod lacinia quam nisl.</p>
							<a href="#" class="button">Nulla aluctus eleifend</a>
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
					
				<button type="submit" class="btn btn-default">Signin</button>
				
				<button type="button" class="btn btn-info">
				<a href="login/forget.php" title="Login" rel="home" >Forget Password</a>
				</button>
				<button type="button" class="btn btn-info">
				<a href="login/signup.php" title="signup" rel="home" >Not A Member Yet!</a>
				</button>
			
			</div>	
      </form>
				</section>
			</div>

		<!-- Section Three -->
			<div class="wrapper style4">
				<section class="container">
					<header class="major">
						<h2>Cras vitae metus aliNuam</h2>
						<span class="byline">pulvinar mollis. Vestibulum sem magna, elementum vestibulum arcu.</span>
					</header>
					<div class="row flush">
						<div class="4u">
							<ul class="special-icons">
								<li>
									<span class="fa fa-cogs"></span>
									<h3>Nulla luctus eleifend</h3>
									<p>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula pellentesque.</p>
								</li>
								<li>
									<span class="fa fa-wrench"></span>
									<h3>Etiam posuere augue</h3>
									<p>Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat liguala.</p>
								</li>
								<li>
									<span class="fa fa-leaf"></span>
									<h3>Fusce ultrices fringilla</h3>
									<p>Maecenas pede nisl, elementum eu, ornare ac, malesuada at, erat. Proin gravida orci porttitor.</p>
								</li>
							</ul>
						</div>
						<div class="4u">
							<ul class="special-icons">
								<li>
									<span class="fa fa-cogs"></span>
									<h3>Nulla luctus eleifend</h3>
									<p>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula pellentesque.</p>
								</li>
								<li>
									<span class="fa fa-wrench"></span>
									<h3>Etiam posuere augue</h3>
									<p>Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat liguala.</p>
								</li>
								<li>
									<span class="fa fa-leaf"></span>
									<h3>Fusce ultrices fringilla</h3>
									<p>Maecenas pede nisl, elementum eu, ornare ac, malesuada at, erat. Proin gravida orci porttitor.</p>
								</li>
							</ul>
						</div>
						<div class="4u">
							<ul class="special-icons">
								<li>
									<span class="fa fa-cogs"></span>
									<h3>Nulla luctus eleifend</h3>
									<p>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula pellentesque.</p>
								</li>
								<li>
									<span class="fa fa-wrench"></span>
									<h3>Etiam posuere augue</h3>
									<p>Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat liguala.</p>
								</li>
								<li>
									<span class="fa fa-leaf"></span>
									<h3>Fusce ultrices fringilla</h3>
									<p>Maecenas pede nisl, elementum eu, ornare ac, malesuada at, erat. Proin gravida orci porttitor.</p>
								</li>
							</ul>
						</div>
					</div>
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
						<div class="3u">
							<a href="#" class="image"><img src="images/placeholder.png" alt=""></a>
							<h3>James Birdsong</h3>
							<p>Backend Developer</p>
						</div>
						<div class="3u">
							<a href="#" class="image"><img src="images/placeholder.png" alt=""></a>
							<h3>Ashish Agarwal</h3>
							<p>Project manager</p>
						</div>
						<div class="3u">
							<a href="#" class="image"><img src="images/placeholder.png" alt=""></a>
							<h3>Sanjay</h3>
							<p>java developr</p>
						</div>
						<div class="3u">
							<a href="#" class="image"><img src="images/placeholder.png" alt=""></a>
							<h3>Vikram khurana</h3>
							<p>Frontend developer</p>
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
