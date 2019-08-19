<?php 

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  // where the form results are sent
  $mailTo = "camkeyser@live.com"

  $headers = "From: ".$mailFrom;
  $txt = "You have received an email from ".$name.".\n\n".message;
  




  mail($mailTo, $txtm $headers);
  header("Location: index.php?mailsend");

}



 ?>