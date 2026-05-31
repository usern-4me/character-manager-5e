<?php

class userService {
    public function hashPassword(string $password){
        return password_hash($password, PASSWORD_ARGON2ID);
    }
    public function passVerify(string $hash1, string $hash2){
        return password_verify($hash1, $hash2);
    }
}
?>