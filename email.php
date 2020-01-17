<?php

$name = $_POST["name"];
$email = $_POST["email"];
$response = $_POST["subject"];
$to = "floriansole@gmail.com";
$subject = "response contact formulier portfolio website";
$message = $name . "\n" . $email . "\n" . $response;
mail($to, $subject, $message);

header("Location: index.php#Contact");