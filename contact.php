<?php
if (isset($_POST['submit']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$services = $POST['services'];
$subject = $_POST['subject'];
$message = $_POST['message'];

 $to='missajo358@gmail.com';
 $formcontent="From:".$name."\n"."Contact:".$contact."\n"." Message: $message";
 $subject = "Job Position Enquiries";
 $mailheaders = "From:".$email;

  if(mail($to, $formcontent, $subject, $mailheaders)){
 echo "Thank You, Message Sent Successfully!".".$name.", "<a href='index.html' style='text-decoration:none;color:#ff00b3;'> Return Home</a>";
}
else{
	echo "OOPPSS! Something went wrong"
}
}
 ?>

