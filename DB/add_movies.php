<?php
session_start();
if (
    !isset($_SESSION['user']['username']) ||
    $_SESSION['user']['username'] !== 'Admin' ||
    $_SESSION['user']['email'] !== 'test@admin.com'
) {
    header('Location: index.php');
    exit;
}

require_once 'db/config.php';
require_once 'classes/Database.php';

$db = new Database();
$pdo = $db->getConnection();

$title         = $_POST['title'];
$description   = $_POST['description'];
$genre         = $_POST['genre'];
$release_year  = $_POST['release_year'];
$director      = $_POST['director'];
$duration      = $_POST['duration'];
$rating        = $_POST['rating'];

// Handle poster upload
$poster = null;
if (isset($_FILES['poster']) && $_FILES['poster']['error'] == UPLOAD_ERR_OK) {
    $filename    = basename($_FILES['poster']['name']);
    $ext         = pathinfo($filename, PATHINFO_EXTENSION);
    $posterName  = uniqid('poster_') . '.' . $ext;
    $target_dir  = "images/uploads/";
    $full_path   = $target_dir . $posterName;
    
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true);
    }

    move_uploaded_file($_FILES['poster']['tmp_name'], $full_path);
    $poster = $full_path;
}

// Insert into database
$stmt = $pdo->prepare("INSERT INTO movies (title, description, genre, release_year, director, duration, rating, poster) 
                       VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->execute([$title, $description, $genre, $release_year, $director, $duration, $rating, $poster]);

header("Location: moviegrid.php?added=1");
exit;