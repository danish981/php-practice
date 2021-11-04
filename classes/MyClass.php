<?php

class MyClass extends AbstractClassOne {

    public static function getPI() {
        return PI;
    }

    public function printCountryNames() {
        print_r($this->getCountryNames());
    }

    public function getValueSomeHow() {
        return "value : " . md5(random_int(0, 10));
    }

    public function getFoo($param) {
        return " i am " . $this->getValue() . " function getFoo(" . $param . "){}";
    }

    protected function getValue() {
        return __CLASS__;       // gives current class name
    }

    public function myCityName(): string {
        return "random string\n";
    }

    public function myRollNumber(): int {
        return random_int(20, 30);
    }

    public function myCountryName(): string {
        return "pakistan";
    }

    protected function getRandomNumber(int $lowerLimit, int $upperLimit): int {
        return random_int($lowerLimit, $upperLimit);
    }

    protected function getMyCityName(string $country): string {
        if ($country == "pakistan") {
            return "islamabad";
        } else if ($country == "indonesia") {
            return "jakarta";
        } else if ($country == "india") {
            return "delhi";
        } else if ($country == "bangladesh") {
            return "dhaka";
        }
        return "capital of country $country";
    }
}

// NOTE : PROTECTED ABSTRACT METHODS CAN BE OVERRIDEN AS PUBLIC IN CHILD CLASS
// NOTE : PROTECTED ABSTRACT METHODS CAN BE OVERRIDEN AS PUBLIC IN CHILD CLASS
// NOTE : PROTECTED ABSTRACT METHODS CAN BE OVERRIDEN AS PUBLIC IN CHILD CLASS
// NOTE : PROTECTED ABSTRACT METHODS CAN BE OVERRIDEN AS PUBLIC IN CHILD CLASS
// NOTE : PROTECTED ABSTRACT METHODS CAN BE OVERRIDEN AS PUBLIC IN CHILD CLASS
// NOTE : PROTECTED ABSTRACT METHODS CAN BE OVERRIDEN AS PUBLIC IN CHILD CLASS
// NOTE : PROTECTED ABSTRACT METHODS CAN BE OVERRIDEN AS PUBLIC IN CHILD CLASS
// NOTE : PROTECTED ABSTRACT METHODS CAN BE OVERRIDEN AS PUBLIC IN CHILD CLASS

// NOTE : PUBLIC ABSTRACT METHODS CANNOT BE OVERRIDEN
// NOTE : PUBLIC ABSTRACT METHODS CANNOT BE OVERRIDEN
// NOTE : PUBLIC ABSTRACT METHODS CANNOT BE OVERRIDEN
// NOTE : PUBLIC ABSTRACT METHODS CANNOT BE OVERRIDEN
// NOTE : PUBLIC ABSTRACT METHODS CANNOT BE OVERRIDEN
// NOTE : PUBLIC ABSTRACT METHODS CANNOT BE OVERRIDEN
// NOTE : PUBLIC ABSTRACT METHODS CANNOT BE OVERRIDEN