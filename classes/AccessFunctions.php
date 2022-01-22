<?php

class AccessFunctions extends AbstractChild {

    public function getMyName(): string {
        return "danish mehmood mughal <br>";
    }

    public function getMyBelovedGame(): string {
        return "pubg pc";
    }

    public function myCityName(): string {
        return "gujranwala<br>";
    }

    public function myRollNumber(): int {
        return rand(45, 100);
    }

    // this method was public in parent class, when we declare in protected, it gives error
    // this method was public in parent class, when we declare in protected, it gives error
    // this method was public in parent class, when we declare in protected, it gives error

    public function myCountryName(): string {
        return "pakistan <br>";
    }

    // this method was protected in base class, we can override it as public

    protected function getValue(): string {
        return "value <br>";
    }

    protected function getFoo($param): string {
        return $param . "<br>";
    }

    protected function getRandomNumber(int $lowerLimit, int $upperLimit): int {
        return random_int($lowerLimit, $upperLimit);
    }

    protected function getMyCityName(string $country): string {
        switch ($country) {
            case  "pakistan":
                return "gujranwala<br>";
                break;
            case "india":
                return "delhi<br>";
                break;
            case "indonesia":
                return "jakarta<br>";
                break;
            default:
                return "lahore";
                break;
        }
    }
}




