<?php

if (isset($_post['submit'])) {
  $name = $_post['name'];
  $subject = $_post['subject'];
  $mailFrom = $_post['mail'];
  $message = $_post['message'];

  $mailTo = "Sivertjessen@hotmail.com";
  $headers = "Fra: ".$mailFrom;
  $txt = "Du har fått en epost fra ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.php?mailsend");
}

?>
