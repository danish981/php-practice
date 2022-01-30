<?php

namespace Practice\TestClasses;

// the full namespace of becomes inlcuding classname will be
// Factory\Employees\Person;			// no Person

class Person {

    protected string $nextLine = "<br>";

    // static property cannot be called from non-static reference
    public function __construct() {
        echo "object of the  " . __METHOD__ . " is created " . $this->nextLine;
    }

    public function getClassName(): string {
        return __CLASS__;
    }


}








