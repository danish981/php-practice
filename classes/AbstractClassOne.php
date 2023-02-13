<?php

abstract class AbstractClassOne {

    abstract public function myCityName(): string;

    abstract public function myRollNumber(): int;

    abstract public function myCountryName(): string;

    /**
     * @throws Exception
     */
    public function useRandomValue(): int {
        return $this->getRandomValue(20, 100);
    }

    // it is good practice to declare abstract methods are protected
    // it is good practice to declare abstract methods are protected
    // it is good practice to declare abstract methods are protected
    // it is good practice to declare abstract methods are protected

    /**
     * @param int $lowerBound
     * @param int $upperBound
     * @return int
     * @throws Exception
     */
    private function getRandomValue(int $lowerBound, int $upperBound): int {
        return random_int($lowerBound, $upperBound);
    }

    public function printValue() {
        return $this->getValue();
    }

    abstract protected function getValue();

    // private function can only be access here inside the class
    public function callotherAbstracMethod(): void {
        $this->getRandomNumber(45, 100);
    }

    abstract protected function getRandomNumber(int $lowerLimit, int $upperLimit): int;

    abstract protected function getFoo($param);

    // when this function is overriden, this method definition will not longer be the same

    abstract protected function getMyCityName(string $country): string;

    protected function getCountryNames(): array {
        return [
            "pakistan",
            "bangladesh",
            "indonesia",
            "afghanistan",
            "turkey",
            "palastine",
            "Azerbaijan",
            "barma",
            "morocco",
            "iraq",
            "iran",
            "china",
            "russia"
        ];
    }

}