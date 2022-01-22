<?php

class TestChildClass extends TestParentClass {
    function whoAmI(): string {
        return "Hi!, I'm Danish Mehmood";
    }

    function sameNameMethod() {
        echo "welcome to the  " . __METHOD__ . " method\n";
    }

}