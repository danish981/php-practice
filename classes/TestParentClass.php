<?php

class TestParentClass {
    function whoAmI(): void {
        echo "perfect web solutions<br>";
    }

    function sameNameMethod() {
        echo "i am  " . __METHOD__ . "<br>";
    }

}
