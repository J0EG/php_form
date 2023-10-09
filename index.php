<?php

// Prompt the user for their name.
$name = readline('Please enter your name: ');

// Get the client's IP address.
$ip = $_SERVER['REMOTE_ADDR'];

// Get the current date and time.
$dateTime = date('Y-m-d H:i:s');

// Display the results.
echo "Name: $name\n";
echo "IP address: $ip\n";
echo "Date and time: $dateTime\n";

?>
