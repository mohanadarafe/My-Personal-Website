<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $msg = $_POST['message'];

  $mailTo = "mafafe@live.com";
  $subject = "Form Submission from ".$name;

  mail($mailTo, $subject, $msg);
  echo '<p>Your message has been sent!</p>';
}
?>
