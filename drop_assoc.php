<?php include("noside.php") ?>

<?php
unset($_SESSION["assoc_list"]);

echo "You will be redirected in a few seconds.";
header("refresh:3;url=add_assoc_station.php");

?>

</body>