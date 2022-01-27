<?php

include("InterfaceOne.php");
include("InterfaceThree.php");

class PolyClass implements InterfaceOne, InterfaceThree {

    private string $nextLine = "<br>";

    public function getPersonName(): string {
        return "yahoo owner name " . $this->nextLine;
    }

    public function getPersonAge(): int {
        return random_int(20, 70);
    }

    public function getPersonSalary(): int {
        return 40000;
    }

    public function getHouseNumber(): int {
        return 354;
    }

    public function getHouseAddress(): string {
        return "Chamma Pan Shop Lohaianwala Gujranwala, punjab pakistan" . $this->nextLine;
    }

    public function getHouseOwnerName(): string {
        return "Someone " . $this->nextLine;
    }

}

