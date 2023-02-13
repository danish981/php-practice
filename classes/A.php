<?php

class A extends AnotherChildClass {

    public string $public_data_A = "A<br>";
    public string $testField__A = "A<br>";
    protected string $protected_data_A = "A<br>";

    // private $private_data_A = "A<br>";

    public static function method__A(): string {
        return "A() method <br>";
    }

    public static function public_method_A(): string {
        return "i am public method A()<br>";
    }

    protected static function protected_method_A(): string {
        return "I am protected method of class A<br>";
    }

    /**
     * @throws Exception
     */
    public function getPhoneNumber(): string {
        return "03" . random_int(10, 99) . "\t" . random_int(1000000, 9999999);
    }

    public function getphpIntMax(): int {
        return PHP_INT_MAX;
    }

}