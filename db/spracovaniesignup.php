<?php
require_once __DIR__ . '/../db/config.php';
require_once __DIR__ . '/../classes/Signup.php';

use loginsignup\Signup;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm = $_POST['confirm_password'] ?? '';

    if ($password !== $confirm) {
        header("Location: /index.php?signup_error=password_mismatch");
        exit;
    }

    $signup = new Signup();
    $result = $signup->register($username, $email, $password);

    if ($result === true) {
        header("Location: ../index.php?signup=success");
        exit;
    } else {
        header("Location: ../index.php?signup_error=$result");
        exit;
    }
}
