<?php

/**
 * Created by PhpStorm.
 * User: Danish
 * Date: 3/6/2021
 * Time: 6:32 AM
 */

// ABSTRACT CLASS CANNOT BE INSTANTIATED
// ABSTRACT CLASS CANNOT BE INSTANTIATED
// ABSTRACT CLASS CANNOT BE INSTANTIATED
// ABSTRACT CLASS CANNOT BE INSTANTIATED
// ABSTRACT CLASS CANNOT BE INSTANTIATED
// ABSTRACT CLASS CANNOT BE INSTANTIATED
// ABSTRACT CLASS CANNOT BE INSTANTIATED
// ABSTRACT CLASS CANNOT BE INSTANTIATED

abstract class AbstractClass {

    public string $username;
    public string $email;
    public $samuraiJack;

    // fields cannot be declared as abstract

    // method signature only , will be defined in child classes
    abstract function getRandomValue(int $lowerValue, int $upperValue): int;

    // method signature only, will be defined in child classes
    abstract function getMyName(): void;

    // method without abstract, can have the body too in abstract class
    public function getRandomMaxValue() {
        return mt_getrandmax();
    }

    // class with at least one abstract method, will be abstract
}


// abstract class cannot be instantiated
// $testObject = new AbstractClass();