<?php include("noside.php"); ?>
<?php include("config.php"); ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lat1 = $_POST["lat1"];
    $lng1 = $_POST["lng1"];
}

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
} else {
    die("<p>Could not connect to the database</p>");
}

if ($msid != false) {
  echo "<h4>Station $msid was added to your station list</h4><br>";
  if (isset($_SESSION["assoc_list"]) == false) {
    $_SESSION["assoc_list"] = array();
  }
  array_push($_SESSION["assoc_list"],$msid);
} else {
  echo "<h4>Failed to find a station in range</h4><br>";
}
echo "You will be redirected in a few seconds.";
header("refresh:3;url=add_assoc_station.php");

?>

</body>
</html>