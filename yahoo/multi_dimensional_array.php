<?php

echo "<br>we will learn about the php associative arrays<br><br>";

$employees = array(
    [1, "danish", "chairman", 56000],
    [2, "umar", "manager", 43000],
    [3, "waleed", "salesman", 30000],
    [4, "usman", "worker", 25000]
);

$members = array(
    array(1, "danish", "chairman", 56000),
    array(2, "umar", "manager", 43000),
    array(3, "waleed", "salesman", 30000),
    array(4, "usman", "worker", 25000),
    array(5, "burhan", "carpentar", 20000)
);

$employees = [
    [1, "danish", "chairman", 56000],
    [2, "umar", "manager", 43000],
    [3, "waleed", "salesman", 30000],
    [4, "usman", "worker", 25000]
];

echo "<br><hr>";

//if we write each element with echo, this happens, each line corresponds the one single element inside nested array
echo $employees[0][0] . " ";
echo $employees[0][1] . " ";
echo $employees[0][2] . " ";
echo $employees[0][3] . " ";
echo "<br>";
echo $employees[1][0] . " ";
echo $employees[1][1] . " ";
echo $employees[1][2] . " ";
echo $employees[1][3] . " ";
echo "<br>";
echo $employees[2][0] . " ";
echo $employees[2][1] . " ";
echo $employees[2][2] . " ";
echo $employees[2][3] . " ";
echo "<br>";
echo $employees[3][0] . " ";
echo $employees[3][1] . " ";
echo $employees[3][2] . " ";
echo $employees[3][3] . " ";

echo "<br><hr>";

function print_array($array) {
    echo "<br><pre>";
    print_r($array);
    echo "</pre>";
    echo "<br><hr>";
}

echo "<br>";
print_array($employees);

//now printing the data with the looping structure

for ($i = 0; $i < 5; $i++) {    //we cannot use sizeof() in the iteration termination
    for ($j = 0; $j < sizeof($members); $j++) {
        echo $members[$i][$j] . " ";
    }
    echo "<br>";
}

//we cannot use the sizeof() for the inner array iterations count

echo "<br><hr>";

//another way of writing the same array is like this
$employees = array(
    [1, "danish", "chairman", 56000],
    [2, "umar", "manager", 43000],
    [3, "waleed", "salesman", 30000],
    [4, "usman", "worker", 25000]
);

//and like this
$employees = array(
    array(1, "danish", "chairman", 56000),
    array(2, "umar", "manager", 43000),
    array(3, "waleed", "salesman", 30000),
    array(4, "usman", "worker", 25000)
);

echo "<br><hr>";

//printing an associative array is not good with the for loop

//but it is good with print_r and foreach

//foreach is perfect for any type of array
foreach ($members as $value) {
    foreach ($value as $in_value) {
        echo $in_value . " ";
    }
    echo "<br>";
}
echo "<br><hr>";

//now printing the data into tabular form using foreach

function for_each_tabular($array) {
    echo "<br><table border='1px' cellpadding='5' cellspacing='0' >";
    foreach ($array as $value) {
        echo "<tr>";
        foreach ($value as $in_value) {
            echo "<td> $in_value </td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

echo "<br><hr>";

for_each_tabular($members);

?>