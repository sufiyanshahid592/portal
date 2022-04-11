<?php

$email = "hamzafarooq454@gmail.com";
$key = "01882dfab33c6aa909cd63fb0ce0526194";
$mask = "Digi Alert";
$to = "923074246828";
$message = "Inquires Save By Waqas";
// Preparing Data to POST Request / DO NOT TOUCH BELOW
$mask = urlencode($mask);
$message = urlencode($message);
$data = "email=".$email."&key=".$key."&mask=".$mask."&to=".$to."&message=".$message;
// Sending the POST Request with cURL to Branded SMS Pakistan Server
$ch = curl_init('https://smsmarketinginpakistan.com/sms/api/send');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch); // Result from Branded SMS Pakistan including Return ID
curl_close($ch);

?>