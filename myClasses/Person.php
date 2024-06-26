<?php

namespace outside;

// the full namespace would be after including the namespace would be
// Factory\Managers\Person;				// not just Person 

class Person {

    private $nextLine = "<br>";

    // static property cannot be called from non-static reference
    // when we access the class properties, fields with $this->, we won't write $ with the variable, unlike self::propertyName but $this->propertyName;
    public function __construct() {
        echo "object of the  " . __METHOD__ . " is created " . $this->nextLine;
    }

    public function myMethod() {
        echo "i am a method " . __METHOD__ . $this->nextLine;
    }

    public function whatImDoing(string $what = "backendcode"): string {
        return "i'm writing the efficient backend code for programmers and websites\n";
    }

    protected function whatsTheUse(string $use = "dynamic webs"): string {
        return "because to make the website super dynamics and super amazing\n";
    }

}
