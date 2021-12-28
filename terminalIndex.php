<?php

echo "enter your name and your name will be printed number of times you will mention\n\n";

$name = readline("what is your name ?  ");
echo "your name is : $name \n\n";

$times = readline("and how many times you want to print your name???  ");
$times = abs($times);       // it is necessary to assign a value after absoluting it

for ($i = 1; $i <= $times; $i++) {
    echo $name . "\n";
}