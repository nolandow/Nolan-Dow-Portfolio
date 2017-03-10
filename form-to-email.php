<!DOCTYPE HTML>
<html>
	<!--Script converting contact form to email submission-->
	<head>
		<title>form-to-email</title>
	</head>
	
	<body>
		<?php
			
			
			$name = $_POST['name'];
			$visitor_email = $_POST['email'];
			$email_subject = "Portfolio Message from $name";
			$email_subject = $_POST['subject'];
			$message = $_POST['message'];
			
			$email_from = 'mail@nolandow.com';
			$email_body = "You have received a new email on your Portfolio from $name. \n".
			"Here is the message: \n $message";
			
			$email_to = 'mail@nolandow.com';
			$headers = "From: $email_from \r \n";
			$headers .= "Reply-To: $visitor_email \r \n";
			mail($email_to, $email_subject, $email_body, $headers);
			
		?>
		
		Thank you for contacting me, I will be in touch as soon as possible.
		
	</body>