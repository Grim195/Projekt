<?php
session_start();
require_once __DIR__ . '/../db/config.php';
require_once __DIR__ . '/../classes/Database.php';

if (
    !isset($_SESSION['user']['username']) ||
    $_SESSION['user']['username'] !== 'Admin' ||
    $_SESSION['user']['email'] !== 'test@admin.com'
) {
    header('Location: index.php');
    exit;
}

$db = new Database();
$pdo = $db->getConnection();

// Match actual columns
$title         = $_POST['title'];
$description   = $_POST['description'];
$genre         = $_POST['genre'];
$release_date  = $_POST['release_year'] . '-01-01';
$director      = $_POST['director'];
$stars         = $_POST['cast'];
$runtime       = $_POST['duration'];
$rating        = $_POST['rating'];
$trailer_url = $_POST['trailer_url'] ?? null;

$image = null;
if (isset($_FILES['poster']) && $_FILES['poster']['error'] == UPLOAD_ERR_OK) {
    $filename    = basename($_FILES['poster']['name']);
    $ext         = pathinfo($filename, PATHINFO_EXTENSION);
    $imageName   = uniqid('movie_') . '.' . $ext;
    $target_dir  = __DIR__ . '/../images/uploads/';
    $full_path   = $target_dir . $imageName;

    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true);
    }

    move_uploaded_file($_FILES['poster']['tmp_name'], $full_path);
    $image = 'images/uploads/' . $imageName;
}

// Insert with correct field names
$stmt = $pdo->prepare("
    INSERT INTO movies (title, genre, director, stars, description, release_date, runtime, rating, image, trailer_url)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
");

$stmt->execute([
    $title, $genre, $director, $stars, $description,
    $release_date, $runtime, $rating, $image, $trailer_url
]);

header("Location: ../moviegrid.php?added=1");
exit;
