<?php
// Collect POST data securely
$name = !empty($_POST['name']) ? filter_var($_POST['name'], FILTER_SANITIZE_STRING) : ''; 
$email = !empty($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
$phone = !empty($_POST['phone']) ? filter_var($_POST['phone'], FILTER_SANITIZE_STRING) : '';
$subject = !empty($_POST['subject']) ? filter_var($_POST['subject'], FILTER_SANITIZE_STRING) : 'Contact Us';
$messageContent = !empty($_POST['message']) ? filter_var($_POST['message'], FILTER_SANITIZE_STRING) : 'Contact Us Message';

$detail["email"] = 'contact@teckywizard.com';
$detail["title"] = "Contact Us Message";
$detail["body"] = "
    You have received a new message from <strong>{$name}</strong>.<br>
    Phone: <strong>{$phone}</strong><br>
    Email: <strong>{$email}</strong><br><br>
    Message: <br><em>" . nl2br($messageContent) . "</em>";

// Construct HTML email template
$message = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0; }
        .email-container { background-color: #ffffff; margin: 40px auto; padding: 20px; border: 1px solid #eaeaea; max-width: 600px; }
        .email-header { background-color: #0073e6; color: white; padding: 20px; text-align: center; font-size: 24px; font-weight: bold; }
        .email-body { padding: 20px; color: #333333; }
        .email-footer { margin-top: 20px; text-align: center; color: #777777; font-size: 12px; }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">Tech Wizard - New Contact Message</div>
        <div class="email-body"><p>' . $detail["body"] . '</p></div>
        <div class="email-footer">&copy; ' . date('Y') . ' Tech Wizard. All rights reserved.</div>
    </div>
</body>
</html>';

// Headers for HTML email
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'From: Tech Wizard <info@teckywizard.com>' . "\r\n";
$headers .= 'Content-Type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'CC: bm.wasim777@gmail.com' . "\r\n"; // Optional CC

// Send the email
if (mail($detail["email"], $detail["title"], $message, $headers)) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
?>
