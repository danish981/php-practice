<?php

/**
 * Created by PhpStorm.
 * User: Danish
 * Date: 3/6/2021
 * Time: 11:27 PM
 */
class C extends B
{
    public $public_data_C = "C<br>";
    protected $protected_data_C = "C<br>";
    private $private_data_C = "C<br>";

    function method__C()
    {
        echo "C() method <br>";
    }

    function public_method_C()
    {
        echo "i am public method C()<br>";
    }

    protected function protected_method_C()
    {
        echo "i am protected method of class C";
    }

}