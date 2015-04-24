<?php include("template.php"); ?>

<h1>Contact Us</h1>
<form action="contact.php" method="POST">
Email: 
<input type="text" name="email">
Message: 
<textarea class="form-control" rows="5" name="message"></textarea><br>
<div class="g-recaptcha" data-sitekey="site-key here"></div><br>
<input type="submit" value="Submit message" class="btn btn-default">
</form>


<?php

include("config.php");

function check_captcha() {
  $gurl = "https://www.google.com/recaptcha/api/siteverify";
  $secret = "secrethere";
  $remoteip = $_SERVER['REMOTE_ADDR'];
  if (!isset($_POST['g-recaptcha-response'])) {
    return false;
  }
  $data = array('secret' => $secret, 'response' => $_POST['g-recaptcha-response'],'remoteip' => $remoteip);

  // use key 'http' even if you send the request to https://...
  $options = array(
      'http' => array(
          'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
          'method'  => 'POST',
          'content' => http_build_query($data),
      ),
  );
  $context  = stream_context_create($options);
  $result = file_get_contents($gurl, false, $context);
  $json = json_decode($result,true);
  return ($json["success"] == true);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $email = (string)$_POST["email"];
      $message = (string)$_POST["message"];
      if (empty ($email) or empty( $message )) {
        echo "<p> Cannot be left empty</p>";
        die();
      } else if (!check_captcha()) {
	echo "<p> CAPTCHA Failed </p>";
      } else {
        $result = oci_parse($conn,"INSERT INTO CONTACT VALUES(:email,:message)");
        oci_bind_by_name($result,":email",$email);
        oci_bind_by_name($result,":message",$message);
        oci_execute($result);
        oci_free_statement($result);
	echo "<p>Your message has been sent.</p>";
      }
      oci_close($conn);
}

?>
