<?php

final class AnotherFinal
{

    private const nextLine = "\r\n";
    public $fieldOne;
    public $severeFever;
    public $agliLine = "\r\n";
    protected $fieldThree;
    private $fieldTwo;
    private $testField;
    private $anotherPrivateField;
    private $nextLine = "\r\n";

    function printSomething(string $something, int $times)
    {
        for ($i = 1; $i <= abs($times); $i++) {
            echo $something . $this->nextLine;
        }
    }

    public function getFieldOne()
    {
        return $this->fieldOne;
    }

    function setFieldOne($fieldOne)
    {
        $this->fieldOne = $fieldOne;
    }

    public function printSentence()
    {
        echo "a quick brown fox jumps over the lazy dog " . self::nextLine;
        echo "a quick brown fox jumps over the lazy dog $this->nextLine";
        echo "a quick brown fox jumps over the lazy dog $this->nextLine";
        echo "a quick brown fox jumps over the lazy dog $this->nextLine";
        echo "a quick brown fox jumps over the lazy dog $this->nextLine";
    }

    public function setFieldTwo($fieldTwo): void
    {
        $this->fieldTwo = $fieldTwo;
    }

    public function getFieldTwo()
    {
        return $this->fieldTwo;
    }

    public function getSevereFever()
    {
        return $this->severeFever;
    }

    public function setSevereFever($severeFever): void
    {
        $this->severeFever = $severeFever;
    }

    public function getAgliLine(): string
    {
        return $this->agliLine;
    }

    public function setAgliLine(string $agliLine): void
    {
        $this->agliLine = $agliLine;
    }

    public function getFieldThree()
    {
        return $this->fieldThree;
    }

    public function setFieldThree($fieldThree): void
    {
        $this->fieldThree = $fieldThree;
    }

    public function getTestField()
    {
        return $this->testField;
    }

    public function setTestField($testField): void
    {
        $this->testField = $testField;
    }

    public function getAnotherPrivateField()
    {
        return $this->anotherPrivateField;
    }

    public function setAnotherPrivateField($anotherPrivateField): void
    {
        $this->anotherPrivateField = $anotherPrivateField;
    }

    public function getNextLine(): string
    {
        return $this->nextLine;
    }

    public function setNextLine(string $nextLine): void
    {
        $this->nextLine = $nextLine;
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