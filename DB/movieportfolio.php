<?php
require_once __DIR__ . '/../classes/Database.php';
require_once __DIR__ . '/../classes/MovieManager.php';

$db = new Database();
$conn = $db->getConnection();
$movieManager = new MovieManager($conn);

// Pagination
$perPage = 12;
$page = isset($_GET['page']) ? max((int)$_GET['page'], 1) : 1;
$offset = ($page - 1) * $perPage;

$totalMovies = $movieManager->getMovieCount();
$totalPages = ceil($totalMovies / $perPage);

// Get paginated movies
$movies = $movieManager->getMoviesPaginated($perPage, $offset);
//slider
$latestMovies = $movieManager->getLatestMovies(5);
//in theatre
$inTheatreMovies = $movieManager->getMoviesWithUpcomingShowtimes(5);
//top rated
$topRatedMovies = $movieManager->getTopRatedMovies();
?>