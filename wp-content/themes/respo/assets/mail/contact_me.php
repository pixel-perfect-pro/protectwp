<meta charset="utf-8">
<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'kontakt@protectwp.pl'; // Add your email address in between the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Kontakt ze strony www:  $name"."\r\n";
$email_body = "Szczegóły:<br><br> Imię/nazwa firmy: $name <br><br> Email: $email_address <br><br> Treść wiadomości:\n$message";
$headers = "From: kontakt@protectwp.pl\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
//$headers .= "Reply-To: $email_address";   
$headers .= "Content-type: text/html; charset=utf-8";
mail($to,$email_subject,$email_body,$headers);
return true;         
?>