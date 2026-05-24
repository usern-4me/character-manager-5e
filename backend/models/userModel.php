<?php
require_once __DIR__ . '/../DBModel.php';

class User {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
    }
    public function create($username, $password) {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $this->db->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        return $stmt->execute(['username' => $username, 'password' => $hashedPassword]);
    }
}
