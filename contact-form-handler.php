<?php

    $name=$_POST['name'];
    $phone = $_POST['phone'];

    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = " $visitor_email";
    $email_subject= "ER-tech solutions";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
  			"User Phone Number: $phone.\n".
			    "\n".
                        	"User Message: $message.\n";
    $to = "erkanalucas@gmail.com.com";

    $headers = "From: $email_from \r\n";
    $headers = "Reply-To: $visitor_email \r\n";
    
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");

?>