<?php

if(count(get_included_files()) ==1) exit("Direct access not permitted.");

$conn= oci_connect("vkhurana","pulsar220", '(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521)) (CONNECT_DATA = (SERVICE_NAME = ORCL) (SID = ORCL)))');

//$conn = oci_pconnect("vkhurana","pulsar220", "oracla.cise.ufl.edu:1521/orcl");
   if ($conn)
   {
       echo "Connected to foo";
       oci_close($conn);
   }
   else
   {
       die("could not connect to foo");
   }
?>

