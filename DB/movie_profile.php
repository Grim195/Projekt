<?php
require_once __DIR__ . '/../classes/Database.php';
require_once __DIR__ . '/../classes/MovieManager.php';
require_once __DIR__ . '/../classes/ShowtimeManager.php';

$db = new Database();
$conn = $db->getConnection();

$movieManager = new MovieManager($conn);
$showtimeManager = new ShowtimeManager($conn);

$movieId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if (!$movieId) {
    header("Location: moviegrid.php");
    exit;
}

$movie = $movieManager->getMovieById($movieId);
if (!$movie) {
    echo "<h2>Movie not found.</h2>";
    exit;
}
?>