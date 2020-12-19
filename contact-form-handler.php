<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$visitor_phone = $_POST['phone'];
	$checkbox = $_POST['checkbox'];
	$message = $_POST['message'];

	$email_from = 'bmbequette@gmail.com';
	$email_subject = "New Form Submission";
	$email_body = "Name: $name.\n".
					"Email: $visitor_email\n
					Phone: $visitor_phone\n
					Message: $message\n";
	
	$to = "bmbequette@gmail.com";
	$headers = "From: $email_from \r\n";
	$headers = "Reply-To: $visitor_email \r\n";
	mail($to,$email_subject,$email_body,$headers);
	header("Location: contact.html");
	
	
echo "<script>
         $(window).load(function(){
             $('#myModal').modal('show');
         });
    </script>";
	
?>