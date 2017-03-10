<!DOCTYPE HTML>
<html>
	<!--Script converting contact form to email submission-->
	<head>
		<title>form-to-email</title>
	</head>
	
	<body>
		<?php
			
			
			$name = $__POST['name'];
			$visitor_email = $__POST['email'];
			$email_subject = 'Portfolio Message from $name';
			$email_subject = $__POST['subject'];
			$message = $__POST['message'];
			
			$email_from = 'nolan@nolandow.github.io';
			$email_body = "You have received a new email on your Portfolio from $name. \n".
			"Here is the message: \n $message";
			
			$email_to = 'nolanadow@gmail.com';
			$headers = "From: $email_from \r \n";
			$headers .= "Reply-To: $visitor_email \r \n";
			mail($email_to, $email_subject, $email_body, $headers);
			
		?>
		
		Thank you for contacting me, I will be in touch as soon as possible.
		
	</body>