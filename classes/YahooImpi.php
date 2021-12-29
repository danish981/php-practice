<?php

include("InterfaceOne.php");
include("InterfaceTwo.php");

class YahooImpi implements InterfaceOne, InterfaceTwo
{

    private $nextLine = "\r\n";
    private $currentId;
    private $userEmail;
    private $userName;

    function __construct($userName, $userEmail)
    {
        $this->userName = $userName;
        $this->userEmail = $userEmail;
        $this->currentId = random_int(30, 300);
    }

    static function getPi(): float
    {
        return PI;
    }

    function addNumbers(int $a, int $b, int $c): int
    {
        return $a + $b + $c;
    }

    function multiplyNumbers(float $a, float $b): float
    {
        return $a * $b;
    }

    function divideNumbers(float $a, float $b): float
    {
        return ($a / $b);
    }

    function getRamainder(int $firstNumber, int $secondNumber): int
    {
        if ($secondNumber === $firstNumber) {
            return -1;
        }
        if ($secondNumber > $firstNumber) {
            $this->swapValues($firstNumber, $secondNumber);
        }
        return $firstNumber % $secondNumber;
    }

    private function swapValues(&$a, &$b)
    {
        $temp = $a;
        $b = $temp;
        $a = $b;
    }

    public function saveDate(string $data)
    {
        return "data $data is saved $this->nextLine";
    }

    public function updateDate(int $id, string $data)
    {
        return "data $data is updated in id = $id $this->nextLine";
    }

    public function deleteRecord(int $id)
    {
        return "record deleted successfully on id = $id $this->nextLine";
    }

    public function getNextLine(): string
    {
        return $this->nextLine;
    }

    public function setNextLine(string $nextLine): void
    {
        $this->nextLine = $nextLine;
    }

    public function getUserEmail()
    {
        return $this->userEmail;
    }

    public function setUserEmail($userEmail): void
    {
        $this->userEmail = $userEmail;
    }

    public function getUserName()
    {
        return $this->userName;
    }

    public function setUserName($userName): void
    {
        $this->userName = $userName;
    }

}

