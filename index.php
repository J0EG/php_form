<?php

// Get the user's name.
$name = $_POST['name'];

// Get the client's IP address.
$ip = $_SERVER['REMOTE_ADDR'];

// Get the current date and time.
$date = date('Y-m-d');
$time = date('H:i:s');

// Create an array to store the user's information.
$userInfo = [
    'name' => $name,
    'ip' => $ip,
    'date' => $date,
    'time' => $time,
];

// Return the user's information as a JSON object.
echo json_encode($userInfo);

?>
