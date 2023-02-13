<?php

namespace Practice\TestClasses;

class NicePerson extends Person {

    private string $userId;
    private string $username;
    private string $userFatherName;
    private string $userEmail;
    private string $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';

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
     * Returns the message uttered by the Person
     *
     * returns the message of particular length given to the method
     *
     * @param int $messageLength the length of message
     * @return stirng
     * @throws Exception
     **/
    public function message(int $messageLength = 10): string {
        $obString = "";
        $charsLength = strlen($this->chars);
        for ($i = 0; $i <= $messageLength; $i++) {
            $obString .= $this->chars[random_int(0, $charsLength)];
        }
        return $obString;
    }

    /**
     * get the user id
     * @return string
     */
    public function getUserId(): string {
        return $this->userId;
    }

    /**
     * set the user id
     * @param string $userId
     */
    public function setUserId(string $userId): void {
        $this->userId = $userId;
    }

    /**
     * get the username
     * @return string
     */
    public function getUsername(): string {
        return $this->username;
    }

    /**
     * set the username
     * @param string $username
     */
    public function setUsername(string $username): void {
        $this->username = $username;
    }

    /**
     * get the father name of the user
     * @return string
     */
    public function getUserFatherName(): string {
        return $this->userFatherName;
    }

    /**
     * set the father name of the user
     * @param string $userFatherName
     */
    public function setUserFatherName(string $userFatherName): void {
        $this->userFatherName = $userFatherName;
    }

    /**
     * get the user email
     * @return string
     */
    public function getUserEmail(): string {
        return $this->userEmail;
    }

    /**
     * set the user email
     * @param string $userEmail
     */
    public function setUserEmail(string $userEmail): void {
        $this->userEmail = $userEmail;
    }

    /**
     * you will go to the next line whenever you have to carriage return, pressing enter like
     * this method is used when the input is long, and you want to jump to the next line
     * and writing something on the next line, instead of "<br>" or "\n" you can use this method
     * @return string
     */
    public function getNextLine(): string {
        return $this->nextLine;
    }

    /**
     * this method is shit, do not use this method
     * @param string $nextLine
     */
    public function setNextLine(string $nextLine): void {
        $this->nextLine = $nextLine;
    }

}

