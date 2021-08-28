<?php 
 
 require 'includes/PHPMailer.php';
 require 'includes/SMTP.php';
 require 'includes/Exception.php';

 use PHPMailer\PHPMailer\PHPmailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;

//  require 'vendor/autoload.php';

 $mail = new PHPMailer(true);
try{
 $mail->isSMTP();
//  $mail->SMTPDebug = SMTP::DEBUG_SERVER;
 $mail->Host = "smtp.gmail.com";

 $mail->SMTPAuth = true;

 $mail->SMTPSecure = "tls";

 $mail->Port = "587";

 $mail->Username = "himanshupparmar824@gmail.com";
 $mail->Password =  "18@Hparmar";
 $mail->Subject = "Test Email Using PHPMailer";
 $mail->setFrom("himanshupparmar824@gmail.com");
 $mail->Body = "This is test";
 $mail->addAddress("himanshupparmar824@gmail.com");
 
  $mail->Send();
     echo "Email Sent..!";
 }catch(Exception $e){
     echo "Message could not be sent. Mailer Error:{$mail->ErrorInfo}";
 }
 $mail->smtpClose();
 ?>