<?php
require_once __DIR__ . '/../DBModel.php';

class userModel extends DBModel {

    public function create(string $username, string $password) {
        $this->connect();
        $stmt = $this->mysqli->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        if (!$stmt) {
            $error = $this->mysqli->error;
            $this->closeConnect();
            throw new Exception("Prepare failed: $error");
        }
        if (!$stmt->bind_param("ss", $username, $password)) {
            $error = $stmt->error;
            $stmt->close();
            $this->closeConnect();
            throw new Exception("Bind failed: $error");
        }
        $success = $stmt->execute();
        if (!$success) {
            $error = $stmt->error;
            $stmt->close();
            $this->closeConnect();
            throw new Exception("Execute failed: $error");
        }
        $this->closeConnect();
        return true;
    }
    public function getUserByName(string $username){
        $this->connect();
        $stmt = $this->mysqli->prepare("SELECT * from users WHERE username = ? LIMIT 1");
        if(!$stmt){
            $error = $this->mysqli->error;
            $this->closeConnect();
            throw new Exception("Prepare failed: $error");
        }
        $name = trim($username);
        if(!$stmt->bind_param("s", $name)){
            $error = $stmt->error;
            $stmt->close();
            $this->closeConnect();
            throw new Exception("Bind failed: $error");
        }
        
        if(!$stmt->execute()){
            $error = $stmt->error;
            $stmt->close();
            $this->closeConnect();
            throw new Exception("Execute failed: $error");
        }
        $result = $stmt->get_result();
        $user = $result->fetch_assoc(); 
        $stmt->close();
        $this->closeConnect();
        return $user; 
    }
    public function getUsers(){
        $this->connect();
        $stmt= $this->mysqli->prepare("SELECT * from users");
        if(!$stmt){
            $error = $this->mysqli->error;
            $this->closeConnect();
            throw new Exception("prepare failed: $error");
        }
        if(!$stmt->execute()){
            $error = $stmt->error;
            $stmt->close();
            $this->closeConnect();
            throw new Exception("execute failed: $error");
        }
        $result = $stmt->get_result();
        $stmt->close();
        $this->closeConnect();
        return $result;
    }//TODO: Not returning anything
}