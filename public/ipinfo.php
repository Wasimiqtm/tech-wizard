<?php
header('Content-Type: application/json');

$token = '3cfda8a52d1aea'; // Replace with your IPinfo token
$url = "https://ipinfo.io/json?token=$token";

// Initialize cURL session
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL request and get response
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    http_response_code(500); // Internal Server Error
    echo json_encode(['error' => 'Error fetching IP info']);
} else {
    // Return the response from IPinfo
    echo $response;
}

// Close cURL session
curl_close($ch);
?>
