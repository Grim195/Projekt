<?php
require_once __DIR__ . '/../db/config.php';
require_once __DIR__ . '/../classes/Database.php';
require_once __DIR__ . '/../classes/UserManager.php';

$db = new Database();
$conn = $db->getConnection();
$userManager = new UserManager($conn);

// Check session
if (!isset($_SESSION['user'])) {
    header("Location: index.php?error=not_logged_in");
    exit;
}

// Fetch current user data
$user = $userManager->getUserByEmail($_SESSION['user']['email']);
$updateMessage = "";
$passwordMessage = "";

// Determine avatar path
$avatarPath = (!empty($user['avatar']) && file_exists(__DIR__ . '/../' . $user['avatar']))
    ? $user['avatar']
    : 'images/uploads/user-img.png';

// Handle profile update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save_profile'])) {
    $username = trim($_POST['username']);
    $email    = trim($_POST['email']);

    if ($userManager->updateProfile($user['id'], $username, $email)) {
        $_SESSION['user']['username'] = $username;
        $_SESSION['user']['email']    = $email;
        $updateMessage = "Profile updated successfully!";
    }
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
        $userManager->updatePassword($user['id'], $hashed);
        $passwordMessage = "Password updated successfully.";
    }
    
    // Fetch user tickets
$stmt = $conn->prepare("
    SELECT t.seats, s.start_time, m.title
    FROM tickets t
    JOIN showtimes s ON t.showtime_id = s.id
    JOIN movies m ON s.movie_id = m.id
    WHERE t.user_id = ?
    ORDER BY s.start_time DESC
");
$stmt->execute([$user['id']]);
$userTickets = $stmt->fetchAll();
}
?>
