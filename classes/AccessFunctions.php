<?php

class AccessFunctions extends AbstractChild {

    public function getMyName(): string {
        return "danish mehmood mughal <br>";
    }

    public function getMyBelovedGame(): string {
        return "Players Unknown Battleground - PC";
    }

    public function myCityName(): string {
        return "gujranwala<br>";
    }

    /**
     * @throws Exception
     */
    public function myRollNumber(): int {
        return random_int(45, 100);
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

    /**
     * @throws Exception
     */
    protected function getRandomNumber(int $lowerLimit, int $upperLimit): int {
        return random_int($lowerLimit, $upperLimit);
    }

    protected function getMyCityName(string $country): string {
        return match ($country) {
            "pakistan" => "gujranwala<br>",
            "india" => "delhi<br>",
            "indonesia" => "jakarta<br>",
            default => "lahore",
        };
    }
}




