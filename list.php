<?php
$conn= oci_connect("vkhurana","pulsar220", '(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = oracle.cise.ufl.edu)(PORT = 1521)) (CONNECT_DATA = (SERVICE_NAME = ORCL) (SID = ORCL)))');

   if ($conn)
   {
     echo "<p>Connected to database.</p>";
   }
   else
   {
       die("could not connect to foo");
   }
?>

