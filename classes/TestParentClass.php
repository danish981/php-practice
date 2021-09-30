<?php

class TestParentClass {
    function whoAmI(): string {
        return "perfect web solutions \n";
    }

    function sameNameMethod() {
        return "I am a " . __METHOD__ . "\b";
    }



}
