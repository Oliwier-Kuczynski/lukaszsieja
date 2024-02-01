<?php

require_once("./utils/connection.php");

$user_name = $_POST['user_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Check if user_name is taken
$stmt = $conn->prepare("SELECT * FROM users WHERE user_name = ?");
$stmt->bind_param("s", $user_name);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Nazwa użytkownika jest zajęta";
    exit();
} else {
    $stmt->close();
}

if ($password != $confirm_password) {
    echo "Hasła nie są takie same";
    exit();
}

$password = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (user_name, email, password) VALUES (?, ?, ?)");

$stmt->bind_param("sss", $user_name, $email, $password);

$stmt->execute();

function generateVerificationCode()
{
    return mt_rand(100000, 999999);
}

function sendVerificationEmail($user_email, $verification_code)
{
    $subject = 'Email Verification';
    $message = 'Your verification code is: ' . $verification_code;

    $headers = "From: olikuczz@vp.pl" . "\r\n" .
        "Reply-To: olikucz@vp.pl" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    // Send email
    $mailSuccess = mail($user_email, $subject, $message, $headers);

    return $mailSuccess;
}

$user_email = "olikucz@vp.pl";
$verification_code = generateVerificationCode();

$success = sendVerificationEmail($user_email, $verification_code);

if ($success) {
    echo 'Email sent successfully.';
} else {
    echo 'Email sending failed.';
}

$stmt->close();
$conn->close();
