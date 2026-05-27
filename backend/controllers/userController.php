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

            if($userModel->getUserByName($username)){
                echo json_encode(['status'=>'error', 'message'=> 'Username taken.']);
                return;
            }

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
    public function getUserByName(string $username){
        if(empty($username)||!is_string($username)){
            http_response_code(400);
            echo json_encode(['status' => 'error', 'message' => 'Missing username']);
            return;
        }
        try{
            $userModel = new userModel();
            $user = $userModel->getUserByName($username);
            echo json_encode(['id'=>$user['id'],'username'=>$user['username']]);
        }catch(Exception $e){
            error_log('getUserByName error: ' . $e->getMessage());
            http_response_code(500);
            echo json_encode(['status' => 'error', 'message' => 'Unable to get user']);
        }
    }
    public function getUsers(){
        try{
            $userModel = new userModel();
            $users = $userModel->getUsers();
            $res = [];
            foreach($users as $u){
                $res[] = ['id'=> $u['id'], 'username'=> $u['username'], 'password'=> $u['upassword']];
            };
            echo json_encode($res);
        }catch(Exception $e){
            error_log('getUsers error: '.$e->getMessage());
            http_response_code(500);
            echo json_encode(['status'=>'error','message'=>'Unable to get users.']);
        }
    }
}
