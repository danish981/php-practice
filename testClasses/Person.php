<?php

namespace Factory\Employees;

// the full namespace of becomes inlcuding classname will be
// Factory\Employees\Person;			// no Person

class Person {

    private $nextLine = "<br>";

    // static property cannot be called from non-static reference
    function __construct() {
        echo "object of the  " . __METHOD__ . " is created " . $this->nextLine;
    }

}








