<?php
require_once "db/config.php";
require_once "classes/Database.php";

// Redirect if not logged in
if (!isset($_SESSION['user'])) {
    header("Location: index.php?error=not_logged_in");
    exit;
}

// Database connection
$db   = new Database();
$conn = $db->getConnection();

// Fetch current user data
$stmt = $conn->prepare(
    "SELECT id, username, email, password_hash, avatar FROM users WHERE email = ?"
);
$stmt->execute([$_SESSION['user']['email']]);
$user = $stmt->fetch();

// Prepare avatarPath (fallback to default)
if (!empty($user['avatar']) && file_exists(__DIR__ . '/../' . $user['avatar'])
) {
    $avatarPath = $user['avatar'];
} else {
    $avatarPath = 'images/uploads/user-img.png';
}

// Messages
$updateMessage   = "";
$passwordMessage = "";

// Handle profile update (email and username)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save_profile'])) {
    $username = trim($_POST['username']);
    $emailNew = trim($_POST['email']);

    $update = $conn->prepare(
        "UPDATE users SET username = ?, email = ? WHERE id = ?"
    );
    $update->execute([$username, $emailNew, $user['id']]);

    // Update session
    $_SESSION['user']['username'] = $username;
    $_SESSION['user']['email'] = $emailNew;

    $updateMessage = "Profile updated successfully!";
}

// Handle password change
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['change_password'])) {
    $oldPass     = $_POST['old_password'] ?? '';
    $newPass     = $_POST['new_password'] ?? '';
    $confirmPass = $_POST['confirm_password'] ?? '';

    if (!password_verify($oldPass, $user['password_hash'])) {
        $passwordMessage = "Old password is incorrect.";
    } elseif ($newPass !== $confirmPass) {
        $passwordMessage = "New passwords do not match.";
    } else {
        $hashed = password_hash($newPass, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("UPDATE users SET password_hash = ? WHERE id = ?");
        $stmt->execute([$hashed, $user['id']]);
        $passwordMessage = "Password updated successfully.";
    }
}

// Handle avatar upload
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['upload_avatar'])) {
    if (
        isset($_FILES['avatar']) &&
        in_array($_FILES['avatar']['type'], ['image/jpeg','image/png','image/gif']) &&
        $_FILES['avatar']['error'] === UPLOAD_ERR_OK
    ) {
        $ext      = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
        $filename = 'avatar_' . $user['id'] . '.' . $ext;
        // ← point into the existing images/uploads folder:
        $targetDir  = __DIR__ . '/../images/uploads/';
        if (!is_dir($targetDir)) mkdir($targetDir, 0755, true);
        $destination = $targetDir . $filename;

        if (move_uploaded_file($_FILES['avatar']['tmp_name'], $destination)) {
            // Save the *web‑accessible* path in DB:
            $dbPath = 'images/uploads/' . $filename;
            $stmt   = $conn->prepare("UPDATE users SET avatar = ? WHERE id = ?");
            $stmt->execute([$dbPath, $user['id']]);

            header("Location: userprofile.php");
            exit;
        } else {
            $updateMessage = "Failed to move uploaded file.";
        }
    } else {
        $updateMessage = "Please upload a valid image (jpg, png, gif).";
    }
}
?>