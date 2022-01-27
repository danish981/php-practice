<?php

class A extends AnotherChildClass{

    public $public_data_A = "A<br>";
    public $testField__A = "A<br>";
    protected $protected_data_A = "A<br>";

    // private $private_data_A = "A<br>";

    public static function method__A() {
        echo "A() method <br>";
    }

    public static function public_method_A() {
        echo "i am public method A()<br>";
    }

    static protected function protected_method_A() {
        echo "I am protected method of class A<br>";
    }

    public function getPhoneNumber(): string {
        return "03" . random_int(10, 99) . "\t" . random_int(1000000, 9999999);
    }

    public function getphpIntMax(): int {
        return PHP_INT_MAX;
    }


}