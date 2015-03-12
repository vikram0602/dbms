<?php
       echo "Connected to foo";

$conn = oci_pconnect("vkhurana","pulsar220", "oracla.cise.ufl.edu:1521/orcl");
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