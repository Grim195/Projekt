<?php 
require_once __DIR__ . '/../db/config.php';
require_once __DIR__ . '/../classes/Database.php';

$db = new Database();
$conn = $db->getConnection();

require_once __DIR__ . '/../classes/ShowtimeManager.php';
$showtimeManager = new ShowtimeManager($conn);

// Get the movie ID from the URL
$movieId = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if (!$movieId) {
    header("Location: moviegrid.php");
    exit;
}

// Fetch movie data
$stmt = $conn->prepare("SELECT * FROM movies WHERE id = ?");
$stmt->execute([$movieId]);
$movie = $stmt->fetch();

if (!$movie) {
    echo "<h2>Movie not found.</h2>";
    exit;
}

// Format release date
$releaseYear = date('Y', strtotime($movie['release_date']));
?>
