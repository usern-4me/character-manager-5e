<?php
require_once __DIR__ . '/../models/User.php';

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    Private function createUser($username, $password) {
        try{
            if(empty($username) || empty($password) || !is_string($username) || !is_string($password)){
                echo json_encode(['status' => 'error', 'message' => 'missing password or username']);
                return;
            }
            $hashedPassword = hash('sha256', $password);
            if($this->getUserByName()){
                echo json_encode(['status' => 'error', 'message' => 'username taken']);
                return;
            }
            $user = $this->createUser($username, $hashedPassword);
        }catch(Exception $e){
            echo "Error: "+$e;
        }
    }
}
