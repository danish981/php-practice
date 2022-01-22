<?php

include("InterfaceOne.php");
include("InterfaceThree.php");

class PolyClass implements InterfaceOne, InterfaceThree {

    private $nextLine = "<br>";

    public function getPersonName() {
        return "yahoo owner name " . $this->nextLine;
    }

    public function getPersonAge() {
        return rand(20, 70);
    }

    public function getPersonSalary() {
        return 40000;
    }

    public function getHouseNumber() {
        return 354;
    }

    public function getHouseAddress() {
        return "Chamma Pan Shop Lohaianwala Gujranwala, punjab pakistan" . $this->nextLine;
    }

    public function getHouseOwnerName() {
        return "Someone " . $this->nextLine;
    }

}

