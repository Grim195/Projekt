<?php
session_start();
require_once __DIR__ . '/../db/config.php';
require_once __DIR__ . '/../classes/Database.php';
require_once __DIR__ . '/../classes/UserManager.php';

if (!isset($_SESSION['user'])) {
    header("Location: ../index.php?error=not_logged_in");
    exit;
}

$db = new Database();
$conn = $db->getConnection();
$userManager = new UserManager($conn);
$user = $userManager->getUserByEmail($_SESSION['user']['email']);

if (
    isset($_FILES['avatar']) &&
    in_array($_FILES['avatar']['type'], ['image/jpeg', 'image/png', 'image/gif']) &&
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
        header("Location: ../userprofile.php?error=upload_failed");
        exit;
    }
} else {
    header("Location: ../userprofile.php?error=invalid_image");
    exit;
}
