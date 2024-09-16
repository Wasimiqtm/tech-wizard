<?php
header('Content-Type: application/json');

// Allow requests from your domain
header('Access-Control-Allow-Origin: https://www.teckywizard.com'); // Replace with your actual domain
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Content-Type');
header('Access-Control-Allow-Credentials: true'); // Allow credentials

$client_ip = $_SERVER['REMOTE_ADDR']; // Get client IP
$token = '3cfda8a52d1aea';

$url = "https://ipinfo.io/{$client_ip}/json?token={$token}";

$response = file_get_contents($url);
if ($response === FALSE) {
    http_response_code(500);
    echo json_encode(['error' => 'Error fetching IP info']);
} else {
    echo $response;
}
?>
