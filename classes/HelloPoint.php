<?php
/**
 * Created by PhpStorm.
 * User: Danish
 * Date: 3/6/2021
 * Time: 8:20 AM
 */

class HelloPoint {
    public function __construct() {
        echo "hello Point";
    }
}

$object = new HelloPoint();             // hello Point

// when all the functiions are called inside the contructer, and we dont need to
// call its method by its object like $object->methods() , we use this with new keyword only

new HelloPoint();           // hello point
