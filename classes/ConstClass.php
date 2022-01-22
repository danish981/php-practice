<?php

define("PI", 3.1416);
define("BUILDING_STOREY", 2);
define("ZIP_SIZE", 980);

// constants outside of the class
const ONE = 1;
const USER_LOGGED_IN_NAME = "BURHAN WANI";
const CURRENT_TIME_ZONE = "ASIA | PAKISTAN | ISLAMABAD ";

class ConstClass {

    // constants inside of the class
    const PI = 3.1415;
    const CURRENT_DAY = "Saturday";
    const MONTH = "March";
    const YEAR = 2021;
    const MONTH_NUMBER = 3;

    public function getYear(): int {
        return constant("YEAR");
    }

    public function getMonth() {
        // by using define() , we can define constant outside of the class
        // or we can define inside the function
        // but we cannot define class variables / fields / data members with define()
        define("USERNAME", "DANISH MEHMOOD");
        return constant("USERNAME");
    }

}

// we can access constant value by using constant() method
echo constant("USER_LOGGED_IN_NAME");

// $object = new ConstClass();
// echo $object->getMonth();

// echo constant("YEAR");

// echo ConstClass::CURRENT_DAY;
// echo ConstClass::MONTH;
// echo ConstClass::YEAR;