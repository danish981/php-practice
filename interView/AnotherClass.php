<?php

// test php code just for practice

class AnotherClass {
    private $username;
    private $email;
    private $userId;

    public function __construct(int $userId, string $username, string $email) {
        $this->username = $username;
        $this->email = $email;
        $this->userId = $userId;
    }

    public function getUsername(): string {
        return $this->username;
    }

}