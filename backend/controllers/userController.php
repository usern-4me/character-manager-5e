<?php
require_once __DIR__ . '/../services/userService.php';
require_once __DIR__ . '/../services/utilService.php';
require_once __DIR__ . '/../models/userModel.php';

class userController {
    protected $userService;
    protected $utilService;
    protected $userModel;

    public function createUser($username, $password) {
        $utilService = new utilService();
        if (empty($username) || empty($password) || !is_string($username) || !is_string($password)) {
            $utilService->logErr(null,null,400,'error','Missing username or password');
            return;
        }
        $userService = new userService();
        $hashedPassword = $userService->hashPassword($password);
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
            $utilService->logErr('createUser',$e->getMessage(),500,'error','Unable to create user');
        }
    }
    public function getUserByName(string $username){
        $utilService = new utilService();
        if(empty($username)||!is_string($username)){
            $utilService->logErr(null,null,400,'error','Missing username');
            return;
        }
        try{
            $userModel = new userModel();
            $user = $userModel->getUserByName($username);
            echo json_encode(['id'=>$user['id'],'username'=>$user['username']]);
        }catch(Exception $e){
            $utilService->logErr('getUserByName',$e->getMessage(),500,'error','Unable to get user');
        }
    }
    public function getUsers(){
        $utilService = new utilService();
        try{
            $userModel = new userModel();
            $users = $userModel->getUsers();
            $res = [];
            foreach($users as $u){
                $res[] = ['id'=> $u['id'], 'username'=> $u['username'], 'password'=> $u['upassword']];
            };
            echo json_encode($res);
        }catch(Exception $e){
            $utilService->logErr('getUsers',$e->getMessage(),500,'error','Unable to get users');
        }
    }
}
