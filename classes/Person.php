<?php

namespace Factory\Administration;
// now name of the class will be Factory\Administration\Person

class Person
{
    private $__name;
    private $nextLine = "<br>";

    public function __construct()
    {
        echo "object of the " . __METHOD__ . " is created " . $this->nextLine;
    }

    public function callTalkingMethod()
    {
        return $this->talkingMethod();
    }

    protected function talkingMethod()
    {
        return $this->__name . "\t" . "is talking\n";
    }

    // can be accessed from its child classess only
    public function talkingPerson(): string
    {
        return $this->getName() . "\t" . $this->talk();
    }

    public function getName(): string
    {
        return $this->__name;
    }

    public function setName(string $name)
    {
        $this->__name = $name;
    }

    // we called the protected method inside the public method inside the class
    // by calling this public method, the protected method will be called too

    protected function talk()
    {
        echo "is talking\n";
    }

}



