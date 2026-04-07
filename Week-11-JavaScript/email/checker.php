<?php

// Could get this array from a SQL table but I didn't want to build a SQL table for an example
$example_emails = ["test@test.com", "example@example.com"];

$user_email = $_GET["email"];
// should validate here as well, especially to prevent exploits or attacks.

$exists = in_array($user_email, $example_emails);

$message = "";
$status = 1;

if($exists){
	$message = "this email is already in use";
	$status = 0;
}

$return = array(
	"message" => $message,
	"status" => $status
);

echo json_encode($return);

?>