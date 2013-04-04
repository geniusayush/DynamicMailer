<?php
require("phpmailer/class.phpmailer.php");
require("phpmailer/class.smtp.php");


$mail = new PHPMailer(); 
$mail->IsSMTP(); // send via SMTP
//IsSMTP(); // send via SMTP
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "geniusayush@gmail.com"; // SMTP username
$mail->Password = "f**koff@gmail"; // SMTP password
$mail->SMTPKeepAlive = true;                  // SMTP connection will not close after each email sent

$webmaster_email = "da_hostel@daiict.ac.in"; //Reply to this email ID
$webmaster_name ="warden";

$email="201001219@daiict.ac.in"; // Recipients email ID
$name="Ayush kulshrestha"; // Recipient's name
$email1="201001215@daiict.ac.in"; // Recipients email ID
$name1="chodu zeel"; // Recipient's name

$mail->From = $webmaster_email;

$mail->FromName = $webmaster_name;

$mail->AddAddress($email,$name);
$mail->AddAddress($email1,$name1);

$mail->AddReplyTo($webmaster_email,$webmaster_name);

$mail->WordWrap = 50; // set word wrap

//$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment

//$mail->AddAttachment("/tmp/image.jpg", "new.jpg"); // attachment

$mail->IsHTML(true); // send as HTML
$mail->Subject = "teri maa ki chut puraain hai gayi";
$mail->Body = "Hi, This is the HTML BODY  teri maa chod denge"; //HTML Body
$mail->AltBody = "This is the body when user views in plain text format"; //Text Body
if(!$mail->Send())
{
echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
echo "Message has been sent";
}
?>
