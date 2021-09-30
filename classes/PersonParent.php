<?php

/**
 * Created by PhpStorm.
 * User: Danish
 * Date: 3/6/2021
 * Time: 9:54 PM
 */
class PersonParent {
    private $name;

    function getName() {
        return $this->name;
    }

    function setName(string $name) {
        $this->name = $name;
    }

}