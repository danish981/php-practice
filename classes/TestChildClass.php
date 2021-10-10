<?php

class TestChildClass extends TestParentClass {
    function whoAmI(): string {
        return "i am danish mehmood";
    }

    function sameNameMethod() {
        echo "i am " . __METHOD__ ;
    }

}