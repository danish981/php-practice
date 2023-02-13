<?php

namespace outside;

class Pdo {

    private static $nextLine = "<br>";

    public function __construct() {
        echo __DIR__ . self::$nextLine;
    }

    public function getPdoMethod() {
        return "this is pdo class object " . self::$nextLine;
    }

}