<?php
require_once "db/config.php";
require_once "classes/Database.php";

// Redirect if not logged in
if (!isset($_SESSION['user'])) {
    header("Location: index.php?error=not_logged_in");
    exit;
}

$db = new Database();
$conn = $db->getConnection();

$email = $_SESSION['user']['email'];
$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();

$updateMessage = "";
$passwordMessage = "";

// Update Profile
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save_profile'])) {
    $username = trim($_POST['username']);
    $emailNew = trim($_POST['email']);
    $firstName = trim($_POST['first_name']);
    $lastName = trim($_POST['last_name']);

    $update = $conn->prepare("UPDATE users SET username = ?, email = ?, first_name = ?, last_name = ? WHERE id = ?");
    $update->execute([$username, $emailNew, $firstName, $lastName, $user['id']]);

    $_SESSION['user']['email'] = $emailNew;
    $_SESSION['user']['username'] = $username;

    $updateMessage = "Profile updated successfully!";
}

// Change Password
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['change_password'])) {
    $oldPass = $_POST['old_password'];
    $newPass = $_POST['new_password'];
    $confirmPass = $_POST['confirm_password'];

    if (!password_verify($oldPass, $user['password'])) {
        $passwordMessage = "Old password is incorrect.";
    } elseif ($newPass !== $confirmPass) {
        $passwordMessage = "New passwords do not match.";
    } else {
        $hashed = password_hash($newPass, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
        $stmt->execute([$hashed, $user['id']]);
        $passwordMessage = "Password updated successfully.";
    }
}
?>