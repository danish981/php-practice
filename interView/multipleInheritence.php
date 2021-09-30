<?php

// php does not support multiple inheritence,
// but this feature can be achieved through interfaces

interface isbn {
    public function setIsbn(string $isbn);
}

interface type {
    public function setType(string $type);
}

// implemented both the interfaces into a single class
class test implements isbn, type {
    private $isbn;
    private $type;

    public function setIsbn(string $isbn) {
        $this->isbn = $isbn;
    }

    public function setType(string $type) {
        $this->type = $type;
    }
}

