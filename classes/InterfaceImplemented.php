<?php

//  A CLASS IMPLEMENTS TWO INTERFACES, AND DEFINED THEIR ALL THE METHODS HERE
// A CLASS WHICH EXTENDS ANOTHER CLASS

// throwing an error, becuause the contructor in BookOne is not filled
// throwing an error, becuause the contructor in BookOne is not filled
// throwing an error, becuause the contructor in BookOne is not filled
// throwing an error, becuause the contructor in BookOne is not filled
// throwing an error, becuause the contructor in BookOne is not filled

class InterfaceImplemented extends BookOne implements UserInterface, InterfaceTwo {

    private string $nextLine = "\r\n";

    public function createData(string $username): string {
        return "data $username successfully created __________ $this->nextLine ";
    }

    public function updateData(string $updateString): string {
        return "data successfully updated to $updateString ______________ $this->nextLine";
    }

    public function removeCollection(int $id): string {
        return "collection removed from the id of $id $this->nextLine";
    }

    public function deleteDate(int $id): string {
        return "data deleted successfully from the $id $this->nextLine";
    }

    public function getCirclePerimter(float $radius): float {
        return 2 * PI * abs($radius);
    }

    public function getCircleArea(float $radius): float {
        return PI * (abs($radius) ** 2);
    }

    public function getBookId(): int {
        return random_int(0, 200);
    }

    public function getBookDetails(): array {
        return [
            "Book Title" => "Jheenga Lala Hur Hur",
            "Book Price" => 450.40,
            "Book Author" => "Adeel Ameen",
            "Book Publisher " => "Ebay Pubishers",
            "Publishing Date" => date("Y-m-d"),
            "Book pages" => 600
        ];
    }

    public function getBookPrice(): float {
        return random_int(100.75, 400.54);
    }

    public function saveValue(int $id, string $value): string {
        return "value $value at id $id is saved $this->nextLine";
    }
}