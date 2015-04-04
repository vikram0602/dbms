<form action="putfaq.php" method="POST">
Question: 
<input type="text" name="question">
Answer: 
<input type="text" name="answer">
<input type="submit" value="Submit Login" class="btn btn-default">
</form>


<?php

include("config.php");

session_start();
if(!isset($_SESSION['CurrentUser']) || $_SESSION['CurrentUserType']!="admin")
	 header("location:/dbms/login/logout.php"); {
  if ($_SESSION["CurrentUserType"]=="admin") {
      $question = (string)$_POST["question"];
      $answer = (string)$_POST["answer"];
      $result = oci_parse($conn,"INSERT INTO faq VALUE(:question,:answer)");
      oci_bind_by_name($result,":question",$question);
      oci_bind_by_name($result,":answer",$answer);
      oci_execute($result)
      oci_free_statement($result);
      oci_close($conn);
     //Connect DB insert new Q
  } else {
      echo "<p>Access Denied</p>";
  }
}

?>
