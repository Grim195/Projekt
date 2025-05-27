<?php
require_once __DIR__ . '/../db/config.php';
require_once __DIR__ . '/../classes/Database.php';
require_once __DIR__ . '/../classes/MovieManager.php';

$db = new Database();
$pdo = $db->getConnection();
$movieManager = new MovieManager($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title        = $_POST['title'] ?? null;
    $genre        = $_POST['genre'] ?? null;
    $director     = $_POST['director'] ?? null;
    $stars        = $_POST['cast'] ?? null;
    $description  = $_POST['description'] ?? null;
    $release_date = $_POST['release_year'] ? $_POST['release_year'] . '-01-01' : null;
    $runtime      = $_POST['duration'] ?? null;
    $rating       = $_POST['rating'] ?? null;
    $trailer      = $_POST['trailer_url'] ?? null;

    $image = null;
    if (isset($_FILES['poster']) && $_FILES['poster']['error'] == UPLOAD_ERR_OK) {
        $filename   = basename($_FILES['poster']['name']);
        $ext        = pathinfo($filename, PATHINFO_EXTENSION);
        $imageName  = uniqid('movie_') . '.' . $ext;
        $uploadPath = __DIR__ . '/../images/uploads/' . $imageName;

        if (!is_dir(dirname($uploadPath))) {
            mkdir(dirname($uploadPath), 0755, true);
        }

        if (move_uploaded_file($_FILES['poster']['tmp_name'], $uploadPath)) {
            $image = 'images/uploads/' . $imageName;
        }
    }

    $movieManager->addMovie([
        'title'        => $title,
        'genre'        => $genre,
        'director'     => $director,
        'stars'        => $stars,
        'description'  => $description,
        'release_date' => $release_date,
        'runtime'      => $runtime,
        'rating'       => $rating,
        'image'        => $image,
        'trailer_url'  => $trailer
    ]);

    header("Location: ../moviegrid.php?added=1");
    exit;
}
?>
