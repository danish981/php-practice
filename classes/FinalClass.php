<?php

final class FinalClass {

    // PUBLIC FIELDS
    private static $youngAge = 20;
    private static $length = 6.11;

    public $endOfLine = "\r\n";
    protected $id;
    protected $usernaeme;
    protected $email;
    private $gamerUsername;
    private $gamerId;
    private $gamerName;
    private $gameName;
    private $gamerAge;
    private $nextLine = "\r\n";

    private $piValue = PI;
    private $houseNumber = 3422;

    function __construct($gamerName, $gamerAge) {
        $this->gamerName = $gamerName;
        $this->gamerId = random_int(0, 999999);
        $this->gamerAge = $gamerAge;
        $this->gamerUsername = $this->gameName . $this->gamerId;
    }

    final public static function halwapuri() {
        return __METHOD__;
    }

    final public static function getPubgKills(string $playerName): int {
        switch ($playerName) {
            case "danish" :
                return 8787;
                break;
            case "farhan":
                return 4536;
                break;
            case "hamza" :
                return 5444;
                break;
            default:
                return 0;
                break;
        }
    }

    function printStatement(): void {
        echo "jackdaws love my big sphinx of quartz $this->nextLine";
        echo "jackdaws love my big sphinx of quartz $this->nextLine";
        echo "jackdaws love my big sphinx of quartz $this->nextLine";
        echo "jackdaws love my big sphinx of quartz $this->nextLine";
        echo "jackdaws love my big sphinx of quartz $this->nextLine";
        echo "jackdaws love my big sphinx of quartz $this->nextLine";
        echo "jackdaws love my big sphinx of quartz $this->nextLine";
        echo "jackdaws love my big sphinx of quartz $this->nextLine";
        echo "jackdaws love my big sphinx of quartz $this->nextLine";
    }

    public function printSentence(): void {
        echo "a quick brown fox jumps over the lazy dog \r\n";
        echo "a quick brown fox jumps over the lazy dog \r\n";
        echo "a quick brown fox jumps over the lazy dog \r\n";
        echo "a quick brown fox jumps over the lazy dog \r\n";
        echo "a quick brown fox jumps over the lazy dog \r\n";
        echo "a quick brown fox jumps over the lazy dog \r\n";
        echo "a quick brown fox jumps over the lazy dog \r\n";
        echo "a quick brown fox jumps over the lazy dog \r\n";
    }

    public function getNextline() {
        return $this->nextLine;
    }

    // NO NEED OF PROTECTED FIELDS BECUASE INHERITENCE IS NOT POSSIBLE

    final public function getGamerData() {
        return $this->gamerName;
    }

    public function getCarriageReturn() {
        return $this->nextLine;
    }

    public function getGamerUsername() {
        return $this->gamerUsername;
    }

    // fields cannot be declared as final
    // fields cannot be declared as final
    // fields cannot be declared as final

    // WE CAN DECLARE PRIVATE FIELDS TOO TO USE INSIDE THE CLASS ONLY

    public function setGamerUsername($username) {
        $this->gamerUsername = $username;
    }

    public function getGamerId(): int {
        return $this->gamerId;
    }

    // NO NEED OF PRIVATE STATIC FIELDS

    public function getGamerAge() {
        return $this->gamerAge;
    }

    public function setGamerName($gamerName) {
        $this->gamerName = $gamerName;
    }

    // NO NEED OF WRITING FINAL HERE, CLASS IS ITSELF FINAL

    final public function sayJumaPrayer() {
        return "saying juma prayer in masjid ";
    }

    // NO NEED OF WRITING FINAL HERE, WHEN THE CLASS ITSELF IS FINAL

    public function getSabziNames(): array {
        return [
            "alu", "palak", "adrak", "dhaniya", "podeena", "pyaz", "thom"
        ];
    }

    public function whatToDo(): void {
        echo "you cannot extend this class";
    }

    final private function getEverything() {
        return "here is everything chana chaat \n";
    }

}

// PHP_EOL DOES NOT WORK, WE CAN USE \r\n INSTEAD
// PHP_EOL DOES NOT WORK, WE CAN USE \r\n INSTEAD
// PHP_EOL DOES NOT WORK, WE CAN USE \r\n INSTEAD
// PHP_EOL DOES NOT WORK, WE CAN USE \r\n INSTEAD
// PHP_EOL DOES NOT WORK, WE CAN USE \r\n INSTEAD
// PHP_EOL DOES NOT WORK, WE CAN USE \r\n INSTEAD

// when we use the public with the methods, we cannot access the fields
// when we use the public with the methods, we cannot access the fields
// when we use the public with the methods, we cannot access the fields
// when we use the public with the methods, we cannot access the fields
// when we use the public with the methods, we cannot access the fields
// when we use the public with the methods, we cannot access the fields
// when we use the public with the methods, we cannot access the fields
// when we use the public with the methods, we cannot access the fields

// when we do not write public with the methods, fields can be accessed
// when we do not write public with the methods, fields can be accessed
// when we do not write public with the methods, fields can be accessed
// when we do not write public with the methods, fields can be accessed
// when we do not write public with the methods, fields can be accessed
// when we do not write public with the methods, fields can be accessed
// when we do not write public with the methods, fields can be accessed
// when we do not write public with the methods, fields can be accessed
// when we do not write public with the methods, fields can be accessed

// FINAL CLASS CANNOT BE EXTENDED BUT IT CAN BE INSTANTIATED
// FINAL CLASS CANNOT BE EXTENDED BUT IT CAN BE INSTANTIATED
// FINAL CLASS CANNOT BE EXTENDED BUT IT CAN BE INSTANTIATED
// FINAL CLASS CANNOT BE EXTENDED BUT IT CAN BE INSTANTIATED
// FINAL CLASS CANNOT BE EXTENDED BUT IT CAN BE INSTANTIATED
// FINAL CLASS CANNOT BE EXTENDED BUT IT CAN BE INSTANTIATED
// FINAL CLASS CANNOT BE EXTENDED BUT IT CAN BE INSTANTIATED
// FINAL CLASS CANNOT BE EXTENDED BUT IT CAN BE INSTANTIATED

// NOTE : FINAL CLASS FIELDS CANNOT BE DECLARED AS FINAL
// NOTE : FINAL CLASS FIELDS CANNOT BE DECLARED AS FINAL
// NOTE : FINAL CLASS FIELDS CANNOT BE DECLARED AS FINAL
// NOTE : FINAL CLASS FIELDS CANNOT BE DECLARED AS FINAL
// NOTE : FINAL CLASS FIELDS CANNOT BE DECLARED AS FINAL
// NOTE : FINAL CLASS FIELDS CANNOT BE DECLARED AS FINAL
// NOTE : FINAL CLASS FIELDS CANNOT BE DECLARED AS FINAL
// NOTE : FINAL CLASS FIELDS CANNOT BE DECLARED AS FINAL

// NOTE : WHEN CLASS IS FINAL, ALL FIELDS AND METHODS ARE FINAL, SO NO NEED OF WRITING FINAL WITH THEM
// NOTE : WHEN CLASS IS FINAL, ALL FIELDS AND METHODS ARE FINAL, SO NO NEED OF WRITING FINAL WITH THEM
// NOTE : WHEN CLASS IS FINAL, ALL FIELDS AND METHODS ARE FINAL, SO NO NEED OF WRITING FINAL WITH THEM
// NOTE : WHEN CLASS IS FINAL, ALL FIELDS AND METHODS ARE FINAL, SO NO NEED OF WRITING FINAL WITH THEM
// NOTE : WHEN CLASS IS FINAL, ALL FIELDS AND METHODS ARE FINAL, SO NO NEED OF WRITING FINAL WITH THEM
// NOTE : WHEN CLASS IS FINAL, ALL FIELDS AND METHODS ARE FINAL, SO NO NEED OF WRITING FINAL WITH THEM
// NOTE : WHEN CLASS IS FINAL, ALL FIELDS AND METHODS ARE FINAL, SO NO NEED OF WRITING FINAL WITH THEM
// NOTE : WHEN CLASS IS FINAL, ALL FIELDS AND METHODS ARE FINAL, SO NO NEED OF WRITING FINAL WITH THEM

