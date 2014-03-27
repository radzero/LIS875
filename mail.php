<?php
	if(isset($_POST['email'])) {
    	$email_to = "radzero@gmx.com";
 		$email_subject = "From the website";
 
   function died($error) {
		echo "Hate to tell you this. but there were some problems with the form.";
 		echo "They are highlighted below.<br /><br />";
 		echo $error."<br /><br />";
 		echo "If you want to send us some information you are going have to fix those.<br /><br />";
 		die();
    }     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['msgs'])) { 
        died('There a problem with the form that you are trying to send. You need to fix that.');      
 
    }
 
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $msgs = $_POST['msgs']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($msgs) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
  
    $email_message = "Form details below.\n\n";
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string); 
    }
 
    $email_message .= "Name: ".clean_string($name)."\n"; 
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($msgs)."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
 
?>
Thanks for email me. I will get back you as quickly as I can. \(*_*)/
<?php
}
?>