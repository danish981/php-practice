<?php

class TestChildClass extends TestParentClass {
    function whoAmI(): void {
        echo "i am danish mehmood <br>";
    }

    function sameNameMethod() {
        echo "i am " . __METHOD__ . "<br>";
    }

}