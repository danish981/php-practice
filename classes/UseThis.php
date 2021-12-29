<?php

/**
 * Created by PhpStorm.
 * User: Danish
 * Date: 3/6/2021
 * Time: 10:11 AM
 */

class UseThis
{

    public static $name = "danish";
    public static $age = 24;
    public static $address = "pakistan, gujranwa";
    private static $nextLine = "<br>";

    public $cousinName = "burhan";

    public static function getStaticName()
    {
        return UseThis::$name;
    }

    public static function getStaticAge()
    {
        return self::$age;
    }

    public static function getStaticAddress()
    {
        // INVALID | using $this-> to access static property
        // return $this->address;
        echo self::$nextLine . "TRYING TO ACCESS STATIC PROPERTY USING $\THIS->";
    }

    public function staticRule()
    {
        $rule = "static property or method cannot be accessed from a non-static context/method";
        $rule .= "\tstatic propety or method cannot be accessed from a non-static method";
        $rule .= "\tstatic property or method can be called using classname with :: and property or method name";
        $rule .= "\tstatic property or method cannot be accessed with this->";
        return $rule;
    }
}


