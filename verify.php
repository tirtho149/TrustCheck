<?php
$secretKey = "YOUR_SECRET_KEY_HERE";
$responseKey = $_POST['g-recaptcha-response'];
$userIP = $_SERVER['REMOTE_ADDR'];

$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
$response = file_get_contents($url);
$response = json_decode($response);

if ($response->success) {
    echo "Verification Success. You are a human!";
} else {
    echo "Verification Failed. You might be a robot.";
}
?>
