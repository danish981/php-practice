<?php

function code_1() {
    $numberArray = [];
    $number = 10;
    while ($number) {
        $number = (int)readline();
        if ($number == 42)
            break;
        if (is_numeric($number) && $number > 0 && $number <= 99) {
            $numberArray[] = $number;
        } else {
            break;
        }
    }

    echo "\nOutput\n";
    foreach ($numberArray as $value) {
        echo $value . "\n";
    }
}





