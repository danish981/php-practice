<?php

/**
 * Created by PhpStorm.
 * User: Danish
 * Date: 3/6/2021
 * Time: 5:30 AM
 */

class anotherFile {

    public static $testValue;
    public static $anotherTestValue;

    public function __construct(int $testValue, int $anotherTestValue) {
        self::$testValue = $testValue;
        self::$anotherTestValue = $anotherTestValue;
    }

}