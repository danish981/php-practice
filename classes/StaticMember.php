<?php
/**
 * Created by PhpStorm.
 * User: Danish
 * Date: 3/6/2021
 * Time: 8:41 AM
 */

// NOTE : PROPERTIES AND METHODS DECLARED AS STATIC ARE ACCESSIBLE WITHOUT NEEDING AN OBJECT

class StaticMember {
    public static $my_static_variable = "foo";
}

echo StaticMember::$my_static_variable;    // foo