<?php
require_once "db/config.php";
require_once "classes/Database.php";
require_once "classes/ShowtimeManager.php";

$db = new Database();
$conn = $db->getConnection();
$showtimeManager = new ShowtimeManager($conn);

$message = "";
$movieId = isset($_GET['movie_id']) ? intval($_GET['movie_id']) : null;

$query = "
    SELECT showtimes.id, movies.title, showtimes.start_time, showtimes.available_seats
    FROM showtimes
    JOIN movies ON showtimes.movie_id = movies.id
    WHERE showtimes.start_time > NOW()
";

$params = [];

if ($movieId) {
    $query .= " AND movies.id = ?";
    $params[] = $movieId;
}

$query .= " ORDER BY showtimes.start_time ASC";
$stmt = $conn->prepare($query);
$stmt->execute($params);
$showtimes = $stmt->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $showtimeId = $_POST['showtime_id'];
    $seats = intval($_POST['seats']);
    $userId = $_SESSION['user']['id'];

    if ($seats <= 0) {
        $message = "Please enter a valid number of seats.";
    } elseif ($showtimeManager->bookSeats($showtimeId, $userId, $seats)) {
        $message = "🎟️ Ticket booked successfully!";
    } else {
        $message = "❌ Not enough seats available.";
    }
}
?>