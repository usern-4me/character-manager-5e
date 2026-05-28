<?php

class userService {
    public function hashPassword(string $password){
        $hsahedPassword = hash('sha512', $password);
        return $hsahedPassword;
    }
}
?>