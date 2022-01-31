


<?php

use Factory\Administration\Person;

class SuperPerson extends Person{

    

    public function getMyMessage() : string {
        return "this is message given by " . __CLASS__ . " class and the method " . __METHOD__ . "\n";
    }
}