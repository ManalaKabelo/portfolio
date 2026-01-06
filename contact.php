<?php
session_start();
include 'includes/header.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';

$success = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name    = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email   = htmlspecialchars(trim($_POST['email'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if (empty($name) || empty($email) || empty($message)) {
        $error = 'Please fill in all fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } else {

        $mail = new PHPMailer(true);

        try {
            // SMTP settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'nranape@gmail.com'; // YOUR Gmail
            $mail->Password   = 'mltckzkmfdbznevb'; // App Password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            // Sender & recipient
            $mail->setFrom('nranape@gmail.com', 'Portfolio Contact');
            $mail->addAddress('nranape@gmail.com', 'Ntheno Ranape');
            $mail->addReplyTo($email, $name);

            // Email content
            $mail->isHTML(true);
            $mail->Subject = 'New Contact Form Message';
            $mail->Body    = "
                <strong>Name:</strong> {$name}<br>
                <strong>Email:</strong> {$email}<br><br>
                <strong>Message:</strong><br>
                {$message}
            ";

            $mail->send();
            $success = 'Message sent successfully!';
        } catch (Exception $e) {
            $error = 'Message could not be sent. Please try again later.';
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us</title>
</head>

<body>
<div class="contact-container">
    <h1>Contact Us</h1>
    
    <?php if($success): ?>
        <div class="success"><?= $success ?></div>
    <?php endif; ?>
    <?php if($error): ?>
        <div class="error"><?= $error ?></div>
    <?php endif; ?>

    <form method="post" action="">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
        <button type="submit">Send Message</button>
    </form>
</div>
</body>
</html>



<style>
body {
    font-family: 'Inter', sans-serif;
    background-color: #000;
    color: #fff;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.contact-container {
    background: #111;
    padding: 30px;
    border-radius: 10px;
    width: 100%;
    max-width: 500px;
    box-shadow: 0 0 20px rgba(255,215,0,0.2);
}

.contact-container h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #FFD700;
}

.contact-container input, 
.contact-container textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 6px;
    border: none;
    background: #222;
    color: #fff;
}

.contact-container button {
    width: 100%;
    padding: 12px;
    background: #FFD700;
    border: none;
    color: #000;
    font-weight: bold;
    border-radius: 6px;
    cursor: pointer;
}

.contact-container button:hover {
    background: #FFA500;
}

.success { color: #0f0; text-align: center; margin-bottom: 10px; }
.error { color: #f00; text-align: center; margin-bottom: 10px; }
</style>
