<<<<<<< HEAD
<title>ANALYSIS</title>
<style type="text/css">
    .Ta
    {
        display: table;
		padding-bottom:10px;
		padding-top: 10px;
	    font-family: "Times New Roman", Times, serif;
    }
  
    .Heading
    {
        display: table-row;
        font-weight: bold;
        text-align: center;
		font-size:24px;
		color:#760113;
		font-style: italic;
    }
    .Ro
    {
        display: table-row;
        font-weight: bold;
        text-align: center;
		font-size:24px;


		
    }
    .Ce
    {
        display: table-cell;
        border: solid;
        border-width: thin;
        padding-left: 5px;
        padding-right: 5px;
		font-size:20px;
		width: 150px;
		height:30px;
    }
</style>

<?php
include("noside.html");
$lng=$_GET["lng1"];
$lat=$_GET["lat1"];
$hum= $_GET["humidity"];
$wind= $_GET["wind"];
$tem= $_GET["temperature"];
$pre= $_GET["pressure"]
$rf= $_GET["rainfall"]
if($hum=='aa' or $hum==NULL)
	$hum=-100;
if($wind=='aa' or $wind==NULL)
	$wind=0;
if($tem=='aa' or $tem== NULL)
	$tem=-20;
if($pre=='aa' or $pre== NULL)
	$pre=0;
if($rf=='aa' or $rf== NULL)
	$rf=0;

$lng1=round($lng,2);
$lat1=round($lat,2);
$msid="100";
//echo $lng1."          ".$lat1."         ".$hum. "      ".$wind."    ".$tem;
?>
<body>
<form   action="search.php" method="get" id="form2">
	 <input type="hidden" id="lat1" name="lat1" value="<?php echo $lat ?>"  >
	 <input type="hidden" id="lng1" name="lng1" value="<?php echo $lng ?>" > 
	 <div class='Ta'>
	 <div class='Ro'>
	 <div class='Ce'>

	 Humidity:<select id="humidity" name="humidity"  > 
				<option value="aa" selected="selected" ></option>
				<option value="0" >> 0</option>
				<option value="10" >> 10</option>
				<option value="20" >> 20</option>
				<option value="30" >> 30</option>
				<option value="50"  >> 50</option>
          </select>
		</div>

		<div class='Ce'>
	 	 Wind Speed:<select id="wind" name="wind"   > 
		 				<option value="aa" selected="selected" ></option>
		 <option value="0" >> 0</option>
				<option value="2" >> 2</option>
				<option value="4" >> 4</option>
				<option value="6" >> 6</option>
				<option value="10" >> 10</option>
          </select>
		 </div>


		<div class='Ce'>
	 Temperature:<select id="temperature" name="temperature"   > 	
	 				<option value="aa" selected="selected" ></option>
	  <option value="0" >> 0</option>
				<option value="10" >> 10</option>
				<option value="20" >> 20</option>
				<option value="50" >> 50</option>
				<option value="70" >> 70</option>
          </select>
		  </div>

     	  <div class='Ce'>
	 Pressure:<select id="pressure" name="pressure"   > 	
	 				<option value="aa" selected="selected" ></option>
	  <option value="0" >> 0</option>
				<option value="10" >> 10</option>
				<option value="20" >> 20</option>
				<option value="50" >> 50</option>
				<option value="70" >> 70</option>
          </select>
		  </div>

		  <div class='Ce'>
	 Rainfall:<select id="rainfall" name="rainfall"   > 	
	 				<option value="aa" selected="selected" ></option>
	  <option value="0" >> 0</option>
				<option value="10" >> 10</option>
				<option value="20" >> 20</option>
				<option value="50" >> 50</option>
				<option value="70" >> 70</option>
          </select>
		  </div>



	 <div class='Ce'> 
<input type="submit" value="FILTER SEARCH">
	  </button>
	  </div> 
	  </div></div> 
	  </form>
</body>
<?php
$conn= oci_connect("vkhurana","pulsar220", '(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = oracle.cise.ufl.edu)(PORT = 1521)) (CONNECT_DATA = (SERVICE_NAME = ORCL) (SID = ORCL)))');

//$conn = oci_pconnect("vkhurana","pulsar220", "oracla.cise.ufl.edu:1521/orcl");
   if ($conn)
   {
	   $b="SELECT * from station_table";
	   $stid = oci_parse($conn,$b);
	   oci_execute($stid);
		$minsum=100;
		 while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
			$sid=$row[0];
			$t_lat=round($row[1],2);
			$t_lng=round($row[2],2);
			$mlat=abs($lat1- $t_lat);
			$mlng=abs($lng1- $t_lng);
			
			$sum=$mlat+$mlng;
			if($sum<$minsum)
			{
				$msid=$sid;
				$minsum=$sum;
				$lng=$t_lng;
				$lat =$t_lat;
					   

			}
	   }
	   echo "</br>".$lng."    a   ".$lat."</br>station id=".$msid."</br>";
       //echo "Connected to foo";
	  
	
		 $b="SELECT * from Climate_data where station_id='".$msid." and humidity >= ".$hum." and wind_speed >= ".$wind." and temperature >= ".$tem. "and pressure >= ".$pre. "and rainfall >= ".$rf;
		// echo $b;
	   $stid = oci_parse($conn,$b);
	   oci_execute($stid);
	   echo '<div class="Ta">';
						echo '<div class="Heading">
								<div class="Ce">Station id</div>
								
								<div class="Ce">Pressure</div>
								<div class="Ce">Humidity</div>
								<div class="Ce">Rainfall</div>
								<div class="Ce">Wind speed</div>
								<div class="Ce">Temperature</div>
								<div class="Ce">Date</div>
 								 </div>';
								 
	   while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
				echo '<div class="Ro">
    								<div class="Ce">'.$row[0].'</div>
  								
									  <div class="Ce">'.round($row[1],2).'</div>
									   <div class="Ce">'.round($row[2],2).'</div>
									    <div class="Ce">'.round($row[3],5).'</div>
										 <div class="Ce">'.round($row[4],2).'</div>
										  <div class="Ce">'.round($row[5],2).'</div>
										   <div class="Ce">'.$row[6].'</div>
 								 </div>';
								
					
						//echo "    <td>" .$row[0]." ".round($row[1],2)." ".round($row[2],2)." ".round($row[3],2)." ".round($row[4],2)." ".round($row[5],2)." ".$row[6]." ". "</td>\n";
    
   
	 
	   }
			echo "</div>";	   
       oci_close($conn);
   
   }
   else
   {
       die("could not connect to foo");
   }

?>
||||||| merged common ancestors
=======

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
>>>>>>> 6cf142d3d85da801fa948c5591b0cbbb5bfb1279
