<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "mark_coding@hotmail.com";
$subject = "Steel";

mail ($to, $subject, $message, "From:" . $email );
echo "Your Message has been sent";


?>