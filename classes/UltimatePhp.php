<?php

namespace isotopes\rangeela\bombi;

class UltimatePhp {

    private static $nextline = "<br>";

    function ultimateMethod() {
        echo "i am an ultimate method of php class ultimatePhp " . self::$nextline;
    }

    public function getMyName(string $name): string {
        return $name . self::$nextline;
    }

}

