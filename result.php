<?php
$fname = $_POST['name'];
$lname = $_POST['lname'];
$email = $_POST['email'];

//Sending Email to form owner
$header = "From: $email\n"
. "Reply-To: $email\n";
$subject = "Submission From My Form";
$email_to = "racuelcer@emailaddress.com";
$message = "name: $name . $lname\n"
. "email: $email\n";
mail($email_to, $subject ,$message ,$header ) ;

?>





<body>
<h1> Thank You for Your Submission </h1>
<p> Again, thank you for your interest in my new web site </p>