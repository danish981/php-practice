<?php

/**
 * Created by PhpStorm.
 * User: Danish
 * Date: 3/6/2021
 * Time: 10:33 PM
 */
class Two extends One
{
    function test()
    {
        echo "function test() is called from Two <br>" . PHP_EOL;
    }

    function accessParent()
    {
        parent::test();
    }

    function accessParentFunc()
    {
        parent::oneFunction();
    }

}