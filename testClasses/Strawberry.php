<?php

namespace Practice\TestClasses;

class Strawberry extends Fruit {

    public function message(): void {
        echo "i am strawberry fruit, that is a fruit too \n";
    }

    public function fileHandle(int $lowerLimit, int $upperLimit): int {
        return random_int($lowerLimit, $upperLimit);
    }

}