<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  </head>

  <body>
    <div class="container">
    <table background="abcd.png"  width="415" height="270" border="0" align="center" >
      <thead>
	  <h2>Login Page</h2>
	  </thead>
	  
      <form role="form" action="login1.php" method="post">
        <div class="form-group">
          <label for="email">Username:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" >
        </div>
		<div class="form-group">
		 <label for="usertype">Usertype:</label>
		 <select class="input-large" name="utype"   >
		  
            <option value="admin" >Admin</option>
			<option value="guest" selected="selected" >Guest</option>
            
			
          </select>
        </div>
		<div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password">
        </div>
			<div>
					
				<button type="submit" class="btn btn-default">Signin</button>
				
				<button type="button" class="btn btn-info">
				<a href="forget.php" title="Login" rel="home" style="color:#FFFFFF">Forget Password</a>
				</button>
			
			</div>	
      </form>
	  </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>
