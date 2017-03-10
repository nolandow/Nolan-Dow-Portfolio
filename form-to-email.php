<!DOCTYPE HTML>
<html>
	<!--Script converting contact form to email submission-->
	<head>
		<title>form-to-email</title>
	</head>
	
	<body>
		<?php
			//Error Function
			function died($error) {
 				echo "We are very sorry, but there were error(s) found with the form you submitted. ";
				echo "These errors appear below.<br /><br />";
				echo $error."<br /><br />";
				echo "Please go back and fix these errors.<br /><br />";
				die();
			}
			
			if(!isset($_POST['name']) ||
				!isset($_POST['email']) ||
				!isset($_POST['message'])) {
				died('We are sorry, but there appears to be a problem with the form you submitted.');
			}
			
			$error_message = "";
 
			$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
			if(!preg_match($email_exp,$email_from)) {
 
			 $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
			 }
 
			  $string_exp = "/^[A-Za-z .'-]+$/";
 
			if(!preg_match($string_exp,$first_name)) {
 
			 $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
			}
 
			if(!preg_match($string_exp,$last_name)) {
 
			$error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
			}
		 
			if(strlen($comments) < 2) {
 
			$error_message .= 'The Comments you entered do not appear to be valid.<br />';
	 
			}
 
			if(strlen($error_message) > 0) {
 
				died($error_message);
		 
			}
			
			$name = $__POST['name'];
			$visitor_email = $__POST['email'];
			$email_subject = 'Portfolio Message from $name';
			$email_subject = $__POST['subject'];
			$message = $__POST['message'];
			
			$email_from = 'nolanadow@gmail.com';
			$email_body = "You have received a new email on your Portfolio from $name. \n".
			"Here is the message: \n $message";
			
			$email_to = 'nolanadow@gmail.com';
			$headers = "From: $email_from \r \n";
			$headers .= "Reply-To: $visitor_email \r \n";
			mail($email_to, $email_subject, $email_body, $headers);
			
		?>
		
		Thank you for contacting me, I will be in touch as soon as possible.
		
	</body>