<?php
namespace loginsignup;

use Database;
use PDO;
use Exception;

require_once(__DIR__ . '/../db/config.php');
require_once(__DIR__ . '/../classes/Database.php');

class Login extends Database {
    protected $connection;

    public function __construct() {
        $this->connect();
        $this->connection = $this->getConnection();
    }

    public function attempt($username, $password) {
    // $username actually holds the email
    $stmt = $this->connection->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password_hash'])) {
        // Make sure the session is started
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Set session with user info
        $_SESSION['user'] = [
            'id' => $user['id'],
            'username' => $user['username'],
            'email' => $user['email']
];

        return true;
    }

    return false;
}
}
