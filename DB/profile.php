<?php
require_once __DIR__ . '/../db/config.php';
require_once __DIR__ . '/../classes/Database.php';
require_once __DIR__ . '/../classes/UserManager.php';

$db = new Database();
$conn = $db->getConnection();
$userManager = new UserManager($conn);

if (!isset($_SESSION['user'])) {
    header("Location: index.php?error=not_logged_in");
    exit;
}

$user = $userManager->getUserByEmail($_SESSION['user']['email']);
$updateMessage = "";
$passwordMessage = "";

// Avatar
$avatarPath = (!empty($user['avatar']) && file_exists(__DIR__ . '/../' . $user['avatar']))
    ? $user['avatar']
    : 'images/uploads/user-img.png';

// Handle avatar upload
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['upload_avatar'])) {
    if (isset($_FILES['avatar']) &&
        in_array($_FILES['avatar']['type'], ['image/jpeg','image/png','image/gif']) &&
        $_FILES['avatar']['error'] === UPLOAD_ERR_OK
    ) {
        $ext = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
        $filename = 'avatar_' . $user['id'] . '.' . $ext;
        $targetDir = __DIR__ . '/../images/uploads/';
        if (!is_dir($targetDir)) mkdir($targetDir, 0755, true);
        $destination = $targetDir . $filename;

        if (move_uploaded_file($_FILES['avatar']['tmp_name'], $destination)) {
            $dbPath = 'images/uploads/' . $filename;
            $userManager->updateAvatar($user['id'], $dbPath);
            $_SESSION['user']['avatar'] = $dbPath;
            header("Location: ../userprofile.php");
            exit;
        } else {
            $updateMessage = "Failed to move uploaded file.";
        }
    } else {
        $updateMessage = "Invalid image type.";
    }
}

// Handle profile save
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save_profile'])) {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);

    if ($userManager->updateProfile($user['id'], $username, $email)) {
        $_SESSION['user']['username'] = $username;
        $_SESSION['user']['email'] = $email;
        $updateMessage = "Profile updated successfully!";
    }
}

// Handle password change
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['change_password'])) {
    $oldPass = $_POST['old_password'] ?? '';
    $newPass = $_POST['new_password'] ?? '';
    $confirmPass = $_POST['confirm_password'] ?? '';

    if (!password_verify($oldPass, $user['password_hash'])) {
        $passwordMessage = "Old password is incorrect.";
    } elseif ($newPass !== $confirmPass) {
        $passwordMessage = "New passwords do not match.";
    } else {
        $hashed = password_hash($newPass, PASSWORD_DEFAULT);
        $userManager->updatePassword($user['id'], $hashed);
        $passwordMessage = "Password updated successfully.";
    }
}
?>
