<?php

use Factory\Employees\Person;

class NicePerson extends Person {
    private string $userId;
    private string $username;
    private string $userFatherName;
    private string $userEmail;

    /**
     * NicePerson constructor.
     * @param string $userId
     * @param string $username
     * @param string $userFatherName
     * @param string $userEmail
     */
    public function __construct(string $userId, string $username, string $userFatherName, string $userEmail) {
        parent::__construct();
        $this->userId = $userId;
        $this->username = $username;
        $this->userFatherName = $userFatherName;
        $this->userEmail = $userEmail;
    }

    /**
     * @return string
     */
    public function getUserId(): string {
        return $this->userId;
    }

    /**
     * @param string $userId
     */
    public function setUserId(string $userId): void {
        $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function getUsername(): string {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getUserFatherName(): string {
        return $this->userFatherName;
    }

    /**
     * @param string $userFatherName
     */
    public function setUserFatherName(string $userFatherName): void {
        $this->userFatherName = $userFatherName;
    }

    /**
     * @return string
     */
    public function getUserEmail(): string {
        return $this->userEmail;
    }

    /**
     * @param string $userEmail
     */
    public function setUserEmail(string $userEmail): void {
        $this->userEmail = $userEmail;
    }

    /**
     * @return string
     */
    public function getNextLine(): string {
        return $this->nextLine;
    }

    /**
     * @param string $nextLine
     */
    public function setNextLine(string $nextLine): void {
        $this->nextLine = $nextLine;
    }


}

