<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // Retrieve form fields
   $name = htmlspecialchars(trim($_POST['name']));
   $email = htmlspecialchars(trim($_POST['email']));
   $message = htmlspecialchars(trim($_POST['message']));

   // Email details
   $to = "rosaliatravels1@gmail.com";  // Destination email address
   $subject = "New Contact Us Message from " . $name;
   $body = "Name: $name\n";
   $body .= "Email: $email\n\n";
   $body .= "Message:\n$message\n";

   $headers = "From: $email\r\n";
   $headers .= "Reply-To: $email\r\n";

   // Send the email
   if (mail($to, $subject, $body, $headers)) {
      echo "<script>alert('Your message has been sent successfully!'); window.location.href='contact.php';</script>";
   } else {
      echo "<script>alert('There was a problem sending your message. Please try again later.'); window.location.href='contact.php';</script>";
   }
} else {
   // Redirect if accessed without submitting the form
   header("Location: contact.php");
   exit();
}
