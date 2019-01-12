<?php
/**
* This example shows settings to use when sending via Google's Gmail servers.
*/

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

include('PHPMailerAutoload.php');

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "noreplytedxmnnit15@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "tedxmnnit@123";

//Set who the message is to be sent from
$mail->setFrom('noreplytedxmnnit15@gmail.com', 'Spandan Music');

//Set an alternative reply-to address
$mail->addReplyTo('renaissance@mnnit.ac.in', 'Renaissance Esummit 2018');

//Set who the message is to be sent to
$mail->addAddress($to , $name );

//Set the subject line
$mail->Subject = $subject;

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body

$mail->msgHTML($body);

//Replace the plain text body with one created manually
$mail->AltBody = $altbody;

//Attach an image file
//$mail->addAttachment();

//send the message, check for errors
if (!$mail->send()) {
   // echo "Mailer Error: " . $mail->ErrorInfo;
   // echo "<script>alert('Message not sent! !!!')</script>";
} else {
  // echo "Message sent!";
 
   // echo "<script>alert('Message sent! !!!')</script>";
}
?>