<?php
if(count(get_included_files()) ==1) exit("Direct access not permitted.");
$conn= oci_connect("vkhurana","password", '(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521)) (CONNECT_DATA = (SERVICE_NAME = ORCL) (SID = ORCL)))');
?>
