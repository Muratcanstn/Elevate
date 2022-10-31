<?php

if (isset($_POST['formsend'])) {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $country = $_POST['country'];
    $message = $_POST['message'];

    $recipient = "ustunmuratcan3@gmail.com";
    $subject = "New message from Elevate";
    $headers="From: $email \n Message: $message";

    mail($recipient, $subject, $firstname, $headers) or die("Error!");

    header("Location: index.html?Sent successful!");

    echo "Thank You!";
}


