<?php
 require_once('PHPMailer-5.2-stable/PHPMailerAutoload.php');
  
 $mail= new PHPMailer();
 $mail ->isSMTP();
 $mail ->SMTPAuth = true;
 $mail ->SMTPSecure = 'ssl';
 $mail ->Host='smtp.gmail.com';
 $mail ->Port='465';
 $mail ->isHTML();
 $mail ->Username='nannymanagement.system@gmail.com';
 $mail ->Password='nanny@parmar';
 $mail ->setFrom('no-reply@gmail.com');

 //message
 $mail ->Subject='NMS';
 $mail ->Body='';

 $mail ->addAddress('himanshupparmar824@gmail.com');
 $mail ->send();
?>