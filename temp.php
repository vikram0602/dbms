<!DOCTYPE html>


<html>
<head>
   
</head>
<body>

	<form   method="post" id="form1">
	 <input type="text" id="abc"  name="fname"><br>
	    <input type="submit" onclick="initialize('form2')" value="Submit">
		</form>
	 	<form   action="search.php" method="post" id="form2">
	 First name: <input type="text" id="lat1" name="lat1" onchange="fun2()"  style= "" ><br>
	Last name: <input type="text" id="lng1" name="lng1" value="aa" onchange="fun2()" >
	  <input type="submit" value="Submit">
	  </form>
  <br>
		</form>
	   
 <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
    <script>
        function initialize() {
        var address = document.getElementById("abc").value;
		//alert(address);
            geocoder = new google.maps.Geocoder();
            geocoder.geocode({
            'address': address
            }, function(results, status) {      
               // var lat=document.getElementById("lat").innerHTML=results[0].geometry.location.lat(); 
				var lat1=document.forms[x]['lat1'].value=results[0].geometry.location.lat(); 	
                var lng1=document.getElementById("lng1").value=results[0].geometry.location.lng();        
				
             //   var lng=document.getElementById("lng").innerHTML=results[0].geometry.location.lng();        
            });
			
			
      //  alert("yooo");
					    
						

		}
        google.maps.event.addDomListener(window, 'load', initialize);
		function fun2()
		{
			document.getElementById("form2").submit();
		}
    </script>	   
	  

</form>
</body>
</html>