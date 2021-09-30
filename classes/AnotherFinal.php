<?php

final class AnotherFinal {

    private const nextLine = "\r\n";
    public $fieldOne;
    public $severeFever;
    public $agliLine = "\r\n";
    protected $fieldThree;
    private $fieldTwo;
    private $testField;
    private $anotherPrivateField;
    private $nextLine = "\r\n";

    function printSomething(string $something, int $times) {
        for ($i = 1; $i <= abs($times); $i++) {
            echo $something . $this->nextLine;
        }
    }

    public function getFieldOne() {
        return $this->fieldOne;
    }

    function setFieldOne($fieldOne) {
        $this->fieldOne = $fieldOne;
    }

    public function printSentence() {
        echo "a quick brown fox jumps over the lazy dog " . self::nextLine;
        echo "a quick brown fox jumps over the lazy dog $this->nextLine";
        echo "a quick brown fox jumps over the lazy dog $this->nextLine";
        echo "a quick brown fox jumps over the lazy dog $this->nextLine";
        echo "a quick brown fox jumps over the lazy dog $this->nextLine";
    }

}


// PHP_EOL (no more)
// PHP_EOL (no more)
// PHP_EOL (no more)
// PHP_EOL (no more)
// PHP_EOL (no more)
// PHP_EOL (no more)

// use "\r\n" for line breaks
// use "\r\n" for line breaks
// use "\r\n" for line breaks
// use "\r\n" for line breaks
// use "\r\n" for line breaks
// use "\r\n" for line breaks
// use "\r\n" for line breaks
// use "\r\n" for line breaks
// use "\r\n" for line breaks
// use "\r\n" for line breaks