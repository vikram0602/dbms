<<<<<<< HEAD
<?php include("template.html"); ?>
=======
<?php include("template.php"); ?>
>>>>>>> eaaa7be5914554e02073317f7d2125c08ffdabad

<form action="contact.php" method="POST">
Email: 
<input type="text" name="email">
Message: 
<textarea class="form-control" rows="5" name="message"></textarea><br>
<input type="submit" value="Submit message" class="btn btn-default">
</form>


<?php

include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if ($_SESSION["CurrentUserType"]=="guest") {
      $email = (string)$_POST["email"];
      $message = (string)$_POST["message"];

if (empty ($email) or empty( $message )) {
    echo "<p> Cannot be left empty</p>";
    die();
  }
      $result = oci_parse($conn,"INSERT INTO CONTACT VALUE(:email,:message)");
      oci_bind_by_name($result,":email",$email);
      oci_bind_by_name($result,":message",$message);
      oci_execute($result);
      oci_free_statement($result);
      oci_close($conn);
     //Connect DB insert new Q
  } else {
      echo "<p>Access Denied</p>";
  }
}

?>
