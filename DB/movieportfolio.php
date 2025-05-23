<?php
require_once __DIR__ . '/../db/config.php';
require_once __DIR__ . '/../classes/Database.php';

$db = new Database();
$conn = $db->getConnection();

// Pagination settings
$moviesPerPage = 12;
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int) $_GET['page'] : 1;
$offset = ($page - 1) * $moviesPerPage;

// Total movie count for pagination display
$totalStmt = $conn->query("SELECT COUNT(*) FROM movies");
$totalMovies = $totalStmt->fetchColumn();
$totalPages = ceil($totalMovies / $moviesPerPage);

// Movies for current page
$stmt = $conn->prepare("SELECT id, title, rating, image FROM movies ORDER BY created_at DESC LIMIT :limit OFFSET :offset");
$stmt->bindValue(':limit', $moviesPerPage, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$movies = $stmt->fetchAll();
