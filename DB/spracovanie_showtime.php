<?php
require_once "db/config.php";
require_once "classes/Database.php";
require_once "classes/ShowtimeManager.php";

$db = new Database();
$conn = $db->getConnection();
$showtimeManager = new ShowtimeManager($conn);

// Fetch movies for dropdown
$movies = $conn->query("SELECT id, title FROM movies ORDER BY title ASC")->fetchAll();

// Handle form submission
$message = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $movieId = $_POST['movie_id'];
    $startTime = $_POST['start_time'];
    $seats = $_POST['total_seats'];

    if ($showtimeManager->addShowtime($movieId, $startTime, $seats)) {
        $message = "Showtime added successfully!";
    } else {
        $message = "Failed to add showtime.";
    }
    return ['message' => $message, 'movies' => $movies];
}
?>