<?php
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
  
//require 'vendor/autoload.php';
 
$mail = new PHPMailer;
if(isset($_POST['send'])){
// getting post values
$fname=$_POST['fname'];		
$toemail=$_POST['toemail'];	
$subject=$_POST['subject'];	
$message=$_POST['message'];
$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'ankit.dhadwal90@gmail.com';          // SMTP username
$mail->Password = '@9k!T@123'; // SMTP password
$mail->SMTPSecure = 'ssl';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to
$mail->setFrom('ankit.dhadwal90@gmail.com', 'Ankit Dhadwal');
//$mail->addReplyTo('yourgmailid@gmail.com', 'Your_Name');
$mail->addAddress($toemail);   // Add a recipient
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');
$mail->isHTML(true);  // Set email format to HTML
$bodyContent=$message;
$mail->Subject =$subject;
$bodyContent = 'Dear'.$fname;
$bodyContent .='<p>'.$message.'</p>';
$mail->Body = $bodyContent;
error_log(isHTML);
 
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Thanks for contacting me will reachout soon!!';
}
}
?>