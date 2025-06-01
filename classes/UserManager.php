<?php
require_once(__DIR__ . '/../db/config.php');
require_once(__DIR__ . '/../classes/Database.php');
class UserManager {
    private PDO $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function getUserByEmail(string $email): ?array {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch() ?: null;
    }

    public function updateProfile(int $userId, string $username, string $email): bool {
        $stmt = $this->db->prepare("UPDATE users SET username = ?, email = ? WHERE id = ?");
        return $stmt->execute([$username, $email, $userId]);
    }

    public function updatePassword(int $userId, string $hashedPassword): bool {
        $stmt = $this->db->prepare("UPDATE users SET password_hash = ? WHERE id = ?");
        return $stmt->execute([$hashedPassword, $userId]);
    }

    public function updateAvatar(int $userId, string $avatarPath): bool {
        $stmt = $this->db->prepare("UPDATE users SET avatar = ? WHERE id = ?");
        return $stmt->execute([$avatarPath, $userId]);
    }
}
