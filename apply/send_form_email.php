<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "you@yourdomain.com";
 
    $email_subject = "Your email subject line";
 
     
 
     
 

  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Email: ".clean_string($email)."\n";
 
    $email_message .= "Channel: ".clean_string($channel)."\n";
 
    $email_message .= "Views: ".clean_string($views)."\n";
 
    $email_message .= "Subscribers: ".clean_string($subscribers)."\n";
	
	$email_message .= "Current Network: ".clean_string($nameotheryt)."\n";
	
	$email_message .= "Other Channels: ".clean_string($channels)."\n";
	
	$email_message .= "Skype: ".clean_string($skype)."\n";
	
	$email_message .= "Referrer: ".clean_string($referrer)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 
Thank you for applying. We will be in touch with you very soon.
 
 
 
<?php
 
}
 
?>