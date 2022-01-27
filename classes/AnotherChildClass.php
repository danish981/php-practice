<?php

class AnotherChildClass extends TestParentClass {

    public function sameNameMethod() : string {
        return "I am method " . __METHOD__ . "<br>";
    }

    public function whoAmI(): string {
        return "another child ";
    }
}
