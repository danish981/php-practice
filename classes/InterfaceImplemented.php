<?php

//  A CLASS IMPLEMENTS TWO INTERFACES, AND DEFINED THEIR ALL THE METHODS HERE
// A CLASS WHICH EXTENDS ANOTHER CLASS

// throwing an error, becuause the contructor in BookOne is not filled
// throwing an error, becuause the contructor in BookOne is not filled
// throwing an error, becuause the contructor in BookOne is not filled
// throwing an error, becuause the contructor in BookOne is not filled
// throwing an error, becuause the contructor in BookOne is not filled

class InterfaceImplemented extends BookOne implements UserInterface, InterfaceTwo {

    private $nextLine = "\r\n";

    public function createData(string $username) {
        return "data $username successfully created __________ $this->nextLine ";
    }

    public function updateData(string $updateString) {
        return "data successfully updated to $updateString ______________ $this->nextLine";
    }

    public function removeCollection(int $id) {
        return "collection removed from the id of $id $this->nextLine";
    }

    public function deleteDate(int $id) : string {
        return "data deleted successfully from the $id $this->nextLine";
    }

    public function getCirclePerimter(float $radius): float {
        return 2 * PI * abs($radius);
    }

    public function getCircleArea(float $radius): float {
        return PI * pow(abs($radius), 2);
    }

    function getBookId() {
        return random_int(0, 200);
    }

    function getBookDetails(): array {
        return [
            "Book Title" => "Jheenga Lala Hur Hur",
            "Book Price" => 450.40,
            "Book Author" => "Adeel Ameen",
            "Book Publisher " => "Ebay Pubishers",
            "Publishing Date" => date("Y-m-d"),
            "Book pages" => 600

        ];
    }

    function getBookPrice(): float {
        return mt_rand(100.75, 400.54);
    }

    public function saveValue(int $id, string $value) {
        return "value $value at id $id is saved $this->nextLine";
    }
}