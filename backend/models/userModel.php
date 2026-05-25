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
        $this->connect;
        $stmt = $this->mysqli->prepare('SELECT * from users WHERE username = "?"');
        if(!$stmt){
            $error = $this->mysqli->error;
            $this->closeConnect();
            throw new Exception("Prepare failed: $error");
        }
        $stmt->bind_param("s", $username);
        if(!$stmt){
            $error = $stmt->error;
            $stmt->close();
            $this->closeConnect();
            throw new Exception("Bind failed: $error");
        }
        $res = $stmt->execute();
        if(!$res){
            $error = $stmt->error;
            $stmt->close();
            $this-closeConnect();
            throw new Exception("Execute failed: $error");
        }
        $this->closeConnect();
        return $res;
    }
}