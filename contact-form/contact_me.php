<?php
// Check for empty fields
if(empty($_POST['formName'])      ||
   empty($_POST['formEmail'])     ||
   empty($_POST['formMessage'])   ||
   !filter_var($_POST['formEmail'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$formName = strip_tags(htmlspecialchars($_POST['formName']));
$email_address = strip_tags(htmlspecialchars($_POST['formEmail']));
$message = strip_tags(htmlspecialchars($_POST['formMessage']));
   
// Create the email and send the message
$to = 'kumpelconsultora@gmail.com'; // Add your email address inbetween the '' replacing yourformName@yourdomain.com - This is where the form will send a message to.
$email_subject = "Contacto de:  $formName";
$email_body = "Contacto recibido desde la web.\n\n"."Detalles:\n\nNombre: $formName\n\nEmail: $email_address\n\nMensaje:\n$message";


ini_set('display_errors','1');
ini_set('display_startup_errors','1');

$mailFrom = 'kumpelconsultora@gmail.com';
$headers = 'MIME-Version: 1.0'."\r\n";
$headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
$headers .= "X-Priority: 3\n";
$headers .= "X-MSMail-Priority: Normal\n";
$headers .= "X-Mailer: php\n";
$headers .= "From: $mailFrom"."\r\n";
// $headers = "From: koopconsultora@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
// $headers .= "Reply-To: $email_address";   

echo("$to, $email_subject, $email_body, $headers");
mail($to, $email_subject, $email_body, $headers);
return true;
?>