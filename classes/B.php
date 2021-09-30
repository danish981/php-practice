<?php

/**
 * Created by PhpStorm.
 * User: Danish
 * Date: 3/6/2021
 * Time: 11:26 PM
 */
class B extends A {
    public $public_data_B = "B<br>";
    protected $protected_data_B = "B<br>";
    private $private_data_B = "B<br>";

    function method__B() {
        echo "B() method <br>";
    }

    function public_method_B() {
        echo "i am public method B()<br>";
    }

    protected function protected_method_B() {
        echo "i am protected method of class B<Br>";
    }
}