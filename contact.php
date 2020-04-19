<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
         $name = $_POST['name'];
		$visitor_email = $_POST['email'];
		$message = $_POST['message'];


		$email_from = 'EasyTutorials@avinashkr.com';

		$email_subject = "New Form Submission";

		$email_body = "User Name: $name.\n".
		"User Email: $visitor_email.\n".
		"User Message: $message.\n";


		$to = "mohammad.a.almasri.7@gmail.com";

		$headers = "From: $email_from \r\n";

		$headers .= "Reply To: $visitor_email \r\n";

		mail($to,email_subject,$email_body,$headers);

		header("Location: Website Name");
		?>
      
   </body>
</html>