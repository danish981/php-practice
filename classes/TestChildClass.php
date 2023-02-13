<?php

class TestChildClass extends TestParentClass {

    public function whoAmI(): string {
        return "Hi!, I'm Danish Mehmood";
    }

    public function sameNameMethod() {
        echo "welcome to the  " . __METHOD__ . " method\n";
    }

}