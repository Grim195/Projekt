<?php
session_start();

require_once __DIR__ . '/../db/config.php';
require_once __DIR__ . '/../classes/Login.php';

use loginsignup\Login;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $login = new Login();

    if ($login->attempt($username, $password)) {
        header("Location: /index.php"); //sends user back to home
        exit;
    } else {
        // If login fails, redirect back with error
        header("Location: /index.php?error=1");
        exit;
    }
}
