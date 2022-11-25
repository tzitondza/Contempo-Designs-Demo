<?php


$result="";

if (isset($_POST['submit'])) {
require 'phpmailer/PHPMailerAutoload.php';
require '/phpmailer/class.phpmailer.php';
require '/phpmailer/class.smtp.php';
$mail-> = new PHPMailer(true);

$mail->Host       = 'smtp.gmail.com';
$mail->Port       = 587;
$mail->SMTPAuth   = true;
$mail->Username   = 'livechats300@gmail.com';
$mail->Password   = 'lgdhijlfbwbxujwg';
$mail->SMTPSecure = 'tls';

$mail->setFrom($_POST['email'],$_POST['name']);
$mail->addAddress('livechats300@gmail.com');
$mail->addReplyTo($_POST['email'],$_POST['name']);

$mail->isHTML(true);
$mail->Subject='Form Submission: '$_POST['subject'];
$mail->Body='<h1>Name :'.$_POST['name'].'<br>Email: '.$_POST['email'].'<br>Message: '.$_POST['message'].'</h1>';

if ( !$mail->send() ) {
   $result="something went wrong"
} else{
  $result="Message sent. Thanks for contacting us.".$_POST['name']." We'll get back to you soon!";
}


}

  
?>
