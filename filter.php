
<html>
<title>Login Unsuccessful</title>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  </head>

  <body>
  <div class="container">
  <nav class="navbar navbar-default">
								<ul class="nav navbar-nav">
									<li class="active"><a href="/dbms/index.php">Home</a></li>
									<li>
										<a href="/dbms/index.php#about">About Us</a>
									</li>
									<li><a href="/dbms/faq.php">FAQs</a></li>
									<li><a href="/dbms/index.php#login">Login</a></li>
									<li><a href="/dbms/contact.php">contact us</a></li>
									<li><a href="/dbms/terms.php">Terms of Use</a></li>
								</ul>
							</nav>
	</div>
<!-- Section One -->
			<div class="wrapper style2" id="login">
				<section class="container">
					<header class="major">
						<h2 align="center">Login Unsuccessful</h2>
					</header>
				 <form role="form" action="search.php" method="post">
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
				<a href="/dbms/login/forget.php" title="Login" rel="home" >Forget Password</a>
				</button>
				<button type="button" class="btn btn-info">
				<a href="/dbms/login/signup.php" title="signup" rel="home" >Not A Member Yet!</a>
				</button>
			
			</div>	
      </form>
				</section>
			</div>



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>
