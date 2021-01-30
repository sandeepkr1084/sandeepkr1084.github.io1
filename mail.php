<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$formcontent="From: $name \n Message: $message";
$recipient = "sandeepkr1084@gmail.com.com";

$subject = $_POST['subject'];

$mailheader = "From: $email \r\n";


require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = 'assrpvtltd@gmail.com';
$mail->Password = '8986858944';
$mail->setFrom('assrpvtltd@gmail.com', 'Doubt:RD Technical');
$mail->addAddress("sandeepkr1084@gmail.com.com");
$mail->isHTML(true);
$mail->Subject = 'Doubt: OTP Verification';

$mail->Body = $formcontent;
			
if ($mail->send())
	echo "message send";
else
	echo"Something went wrong!!!";



?>