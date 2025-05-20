<?php
namespace loginsignup;

use Database;
use PDO;
use Exception;

require_once(__DIR__ . '/../db/config.php');
require_once(__DIR__ . '/Database.php');

class Signup extends Database {
    protected $connection;

    public function __construct() {
        $this->connect();
        $this->connection = $this->getConnection();
    }

    public function register($username, $email, $password) {
        try {
            // Check if email or username already exists
            $stmt = $this->connection->prepare("SELECT id FROM users WHERE email = :email OR username = :username");
            $stmt->execute([
                ':email' => $email,
                ':username' => $username
            ]);
            if ($stmt->fetch()) {
                return "Email or username already exists.";
            }

            // Hash password
            $passwordHash = password_hash($password, PASSWORD_BCRYPT);

            // Insert user
            $stmt = $this->connection->prepare("INSERT INTO users (username, email, password_hash) VALUES (:username, :email, :password)");
            $stmt->execute([
                ':username' => $username,
                ':email' => $email,
                ':password' => $passwordHash
            ]);

            return true;

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
