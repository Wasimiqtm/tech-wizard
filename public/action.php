<?php

$name = isset($_POST['name']) ? $_POST['name'] : 'wasim';
$email = isset($_POST['email']) ? $_POST['email'] : 'customer@gmail.com';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '2345';
$subject = isset($_POST['subject']) ? $_POST['subject'] : 'test';
$messageContent = isset($_POST['message']) ? $_POST['message'] : 'message';

$detail["email"] = 'bm.wasim777@gmail.com';
$detail["title"] = "Contact Us Message";
$detail["body"] = "You have received a new message from <strong>" . $name . "</strong>.<br>
Phone: <strong>" . $phone . "</strong><br>
Email: <strong>" . $email . "</strong><br><br>
Message: <br><em>" . nl2br($messageContent) . "</em>";

// Construct the professional HTML message template
$message = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .email-container {
            background-color: #ffffff;
            margin: 40px auto;
            padding: 20px;
            border: 1px solid #eaeaea;
            max-width: 600px;
        }
        .email-header {
            background-color: #0073e6;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }
        .email-body {
            padding: 20px;
            color: #333333;
        }
        .email-body p {
            margin: 0;
            line-height: 1.5;
        }
        .email-footer {
            margin-top: 20px;
            text-align: center;
            color: #777777;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            Tech Wizard - New Contact Message
        </div>
        <div class="email-body">
            <p>' . $detail["body"] . '</p>
        </div>
        <div class="email-footer">
            <p>&copy; ' . date('Y') . ' Tech Wizard. All rights reserved.</p>
        </div>
    </div>
</body>
</html>';

// Headers for HTML email
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'From: Tech Wizard <info@teckywizard.com>' . "\r\n";
$headers .= 'Content-Type: text/html; charset=UTF-8' . "\r\n";

// Send the email
if (mail($detail["email"], $detail["title"], $message, $headers)) {
    // Return success response
    echo json_encode(['success' => true]);
} else {
    // Return failure response
    echo json_encode(['success' => false]);
}

?>
