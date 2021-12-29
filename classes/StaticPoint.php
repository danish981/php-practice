<?php

/**
 * Created by PhpStorm.
 * User: Danish
 * Date: 3/6/2021
 * Time: 8:51 AM
 */

class StaticPoint
{

    // private static fields
    private static $cityName = "gujranwala";
    private static $coutryName = "pakistan";

    // private static fields
    private static $provinceName = "punjab";
    private $name = "danish mehmood mughal";
    private $age = 24;

    public static function getDetails()
    {
        // trying to access the non static property $name
        // trying to access the non static property $age
        // CANNOT ACCESS THE NON-STATIC PROPERTY FROM STATIC CONTEXT
        // resson is, this
        // https://stackoverflow.com/questions/290884/what-is-the-reason-behind-non-static-method-cannot-be-referenced-from-a-static
        // it says that, NON-STATIC PROPERTY EXISTS ONLY WHEN THE OBJECT IS CREATED
        // BUT STATIC PROPERTY EXISTS WITHOUT OBJECT CREATION | IT IS CONNECTED WITH THE CLASS INDEPENDENTLY
        echo "<br>____blank static function";
    }

    public static function youFrom()
    {
        // REMEBER WE USER USING DOLLER SIGN $ WITH THE VARIABLES
        echo "<br>city name : " . StaticPoint::$cityName;
        echo "<br>province name : " . StaticPoint::$provinceName;
        echo "<br>country name : " . StaticPoint::$coutryName;
    }

}