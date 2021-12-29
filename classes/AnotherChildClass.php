<?php


class AnotherChildClass extends TestParentClass
{

    function sameNameMethod()
    {
        echo "I am method " . __METHOD__ . "<br>";
    }

    function whoAmI(): void
    {
        echo "another child ";
    }
}
