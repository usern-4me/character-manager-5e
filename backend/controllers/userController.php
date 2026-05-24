<?php
require_once __DIR__ . '/../models/userModel.php';

class userController {
    private $userModel;

    public function createUser($username, $password) {
        if (empty($username) || empty($password) || !is_string($username) || !is_string($password)) {
            http_response_code(400);
            echo json_encode(['status' => 'error', 'message' => 'Missing username or password']);
            return;
        }
        $hashedPassword = hash('sha512', $password);
        try {
            $userModel = new userModel();
            $created = $userModel->create($username, $hashedPassword);
            if ($created) {
                echo json_encode(['status' => 'success', 'message' => 'User created']);
            } else {
                http_response_code(500);
                echo json_encode(['status' => 'error', 'message' => 'Unable to create user']);
            }
        } catch (Exception $e) {
            error_log('createUser error: ' . $e->getMessage());
            http_response_code(500);
            echo json_encode(['status' => 'error', 'message' => 'Unable to create user']);
        }
    }
}
