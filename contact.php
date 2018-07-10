<?php

$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$msg = $_POST['message'];

require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = 'mohanadarafework@gmail.com';
$mail->Password = 'googlE91';

$mail->setFrom($email, $name);
$mail->addAddress('mohanadarafework@gmail.com');
$mail->Subject = $subject;
$mail->Body = "You have received an email from ".$name.". \n\n".$msg;

if ($mail->send()){
  echo "Thank you for sending us a message.";
}
?>
