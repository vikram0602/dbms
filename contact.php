<?php include("template_contact.html"); ?>

<form action="contact.php" method="POST">
Email: 
<input type="text" name="email">
Message: 
<textarea class="form-control" rows="5" name="message"></textarea><br>
<input type="submit" value="Submit message" class="btn btn-default">
</form>


<?php

include("config.php");

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if ($_SESSION["CurrentUserType"]=="guest") {
      $email = (string)$_POST["email"];
      $message = (string)$_POST["message"];
      $result = oci_parse($conn,"INSERT INTO CONTACT VALUE(:email,:message)");
      oci_bind_by_name($result,":email",$email);
      oci_bind_by_name($result,":message",$message);
      oci_execute($result);
     //Connect DB insert new Q
  } else {
      echo "<p>Access Denied</p>";
  }
}

?>
