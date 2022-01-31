<?php

namespace Practice\TestClasses;

// the full namespace of becomes inlcuding classname will be
// Factory\Employees\Person;			// no Person

class Person {

    protected string $nextLine = "<br>";
    private bool $isSingle;

    // static property cannot be called from non-static reference
    public function __construct(bool $isSingle = true) {
        $this->isSingle = $isSingle;
        echo "object of the  " . __METHOD__ . " is created " . $this->nextLine;
    }

    public function getClassName(): string {
        return __CLASS__;
    }

    public function isPersonSingle(): bool {
        return $this->isSingle;
    }

    
}








