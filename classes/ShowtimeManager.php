<?php
class ShowtimeManager {
    private $db;

    public function __construct(PDO $pdo) {
        $this->db = $pdo;
    }

    // Get upcoming showtimes for a specific movie
    public function getUpcomingShowtimes($movieId) {
        $stmt = $this->db->prepare("SELECT * FROM showtimes WHERE movie_id = ? AND show_date > NOW() ORDER BY show_date ASC");
        $stmt->execute([$movieId]);
        return $stmt->fetchAll();
    }

    // Check if the movie has at least one future showtime
    public function hasUpcomingShowtime($movieId) {
        $stmt = $this->db->prepare("SELECT COUNT(*) FROM showtimes WHERE movie_id = ? AND show_date > NOW()");
        $stmt->execute([$movieId]);
        return $stmt->fetchColumn() > 0;
    }

    // Book tickets for a user
    public function bookSeats($showtimeId, $userId, $seatCount) {
        // First, check availability
        $stmt = $this->db->prepare("SELECT available_seats FROM showtimes WHERE id = ?");
        $stmt->execute([$showtimeId]);
        $available = $stmt->fetchColumn();

        if ($available < $seatCount) {
            return false; // Not enough seats
        }

        // Insert ticket
        $stmt = $this->db->prepare("INSERT INTO tickets (showtime_id, user_id, seats) VALUES (?, ?, ?)");
        $stmt->execute([$showtimeId, $userId, $seatCount]);

        // Update availability
        $stmt = $this->db->prepare("UPDATE showtimes SET available_seats = available_seats - ? WHERE id = ?");
        $stmt->execute([$seatCount, $showtimeId]);

        return true;
    }

    // Get all booked seats for a showtime
    public function getBookedSeats($showtimeId) {
        $stmt = $this->db->prepare("SELECT SUM(seats) FROM tickets WHERE showtime_id = ?");
        $stmt->execute([$showtimeId]);
        return $stmt->fetchColumn();
    }
    public function addShowtime($movieId, $startTime, $totalSeats) {
    $stmt = $this->db->prepare("
        INSERT INTO showtimes (movie_id, start_time, total_seats, available_seats)
        VALUES (?, ?, ?, ?)
    ");
    return $stmt->execute([$movieId, $startTime, $totalSeats, $totalSeats]);
    }
    
}