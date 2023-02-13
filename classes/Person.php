<?php

namespace Factory\Administration;
// now name of the class will be Factory\Administration\Person

use JetBrains\PhpStorm\Pure;

class Person {

    private string $__name;
    private string $nextLine = "<br>";

    public function __construct() {
        echo "object of the " . __METHOD__ . " is created " . $this->nextLine;
    }

    #[Pure] public function callTalkingMethod(): string {
        return $this->talkingMethod();
    }

    protected function talkingMethod(): string {
        return $this->__name . "\t" . "is talking\n";
    }

    // can be accessed from its child classess only
    public function talkingPerson(): string {
        return $this->getName() . "\t" . $this->talk();
    }

    public function getName(): string {
        return $this->__name;
    }

    public function setName(string $name): void {
        $this->__name = $name;
    }

    // we called the protected method inside the public method inside the class
    // by calling this public method, the protected method will be called too

    protected function talk(): void {
        echo "is talking\n";
    }

}



