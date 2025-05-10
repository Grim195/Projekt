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
        $stmt = $this->connection->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password_hash'])) {
            // Set session
            $_SESSION['user'] = [
                'id' => $user['id'],
                'username' => $user['username']
            ];
            return true;
        }

        return false;
    }
}
