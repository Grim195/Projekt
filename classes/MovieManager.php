<?php

require_once(__DIR__ . '/../db/config.php');
require_once(__DIR__ . '/../classes/Database.php');
class MovieManager {
    private PDO $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function getMovieById(int $id): ?array {
        $stmt = $this->db->prepare("SELECT * FROM movies WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch() ?: null;
    }

    public function getAllMovies(): array {
        $stmt = $this->db->query("SELECT * FROM movies ORDER BY created_at DESC");
        return $stmt->fetchAll();
    }

    public function addMovie(array $data): bool {
        $stmt = $this->db->prepare("
            INSERT INTO movies (title, genre, director, stars, description, release_date, runtime, rating, image, trailer_url)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ");
        return $stmt->execute([
            $data['title'],
            $data['genre'],
            $data['director'],
            $data['stars'],
            $data['description'],
            $data['release_date'],
            $data['runtime'],
            $data['rating'],
            $data['image'],
            $data['trailer_url']
        ]);
    }
    public function getMovieCount() {
    $stmt = $this->db->query("SELECT COUNT(*) FROM movies");
    return $stmt->fetchColumn();
}

public function getMoviesPaginated($limit, $offset) {
    $stmt = $this->db->prepare("SELECT * FROM movies ORDER BY created_at DESC LIMIT ? OFFSET ?");
    $stmt->bindValue(1, (int)$limit, PDO::PARAM_INT);
    $stmt->bindValue(2, (int)$offset, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll();
}
}
