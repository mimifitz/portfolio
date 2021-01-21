<?php
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$services = $POST['services'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "missajo358@gmail.com";
$subject = "Job Position Enquiries";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
// echo "Thank You, Your message has been sent!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff00b3;'> Return Home</a>";
// ?>
echo '<script>alert("Thank You, Your message has been sent!")</script>';
    echo '<script>window.location.href="index.html";</script>';
}

