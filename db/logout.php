<?php
require_once __DIR__ . '/../db/config.php';
// Unset all of the session variables
$_SESSION = [];
// Destroy the session cookie if one exists
if (ini_get("session.use_cookies")) {
    setcookie(session_name(), '', time() - 42000, '/');
}
// Finally destroy the session
session_destroy();

// Redirect back to homepage (adjust path if needed)
header("Location: index.php");
exit;
