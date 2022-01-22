<?php

/**
 * Created by PhpStorm.
 * User: Danish
 * Date: 3/6/2021
 * Time: 10:31 PM
 */
class One {

    public function test() {
        echo "method test() is called of class One \n" . PHP_EOL;
    }

    function func() {
        echo "function func() is called of class One\n" . PHP_EOL;
    }

    function oneFunction() {
        echo "Hi from function one() of class One \n" . PHP_EOL;
    }

    public function anotherFunction(): string {
        return "Hi, i am another function \n" . __METHOD__ . PHP_EOL;
    }

}


