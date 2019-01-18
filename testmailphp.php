<?php
$quantity = $_GET['quantity'];
$value = $_GET['value'];
$flr = $_GET['flr'];
$tim = $_GET['tim'];
$lim = $_GET['lim'];
require '/usr/share/php/libphp-phpmailer/class.smtp.php';
require '/usr/share/php/libphp-phpmailer/class.phpmailer.php';
$mail = new PHPMailer;
$mail->setFrom('admin@example.com');
$mail->addAddress('ee17btech11036@iith.ac.in');
$mail->Subject = $flr.' '.$quantity.' crossed threshold';
$mail->Body = 'At Time = '.$tim.'
Threshold value = '.$lim.'
'.$quantity.' reading = '.$value;
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl';
$mail->Host = 'ssl://smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Port = 465;

//Set your existing gmail address as user name
$mail->Username = 'manasa017290@gmail.com';

//Set the password of your gmail address here
$mail->Password = 'gmail_password';
if(!$mail->send()) {
  echo 'Email is not sent.';
  echo 'Email error: ' . $mail->ErrorInfo;
} else {
  echo 'Email has been sent.';
}

?>
