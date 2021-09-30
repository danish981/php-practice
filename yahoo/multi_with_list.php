<?php

echo "<br>we will learn about the multi dimensional arrays with list() function in foreach loop<br><hr>";

$employess = [
    ["id" => 1, "name" => "burhan", "designation" => "chairman", "salary" => 55000],
    ["id" => 2, "name" => "waleed", "designation" => "cashier", "salary" => 60000],
    ["id" => 3, "name" => "fatima", "designation" => "accountant", "salary" => 52000],
    ["id" => 4, "name" => "ayesha", "designation" => "data operator", "salary" => 75000],
    ["id" => 5, "name" => "wajiha", "designation" => "security admin", "salary" => 45000],
    ["id" => 6, "name" => "momall", "designation" => "IT admin", "salary" => 54000]
];

function format_print_r($array) {
    echo "<br><pre>";
    print_r($array);
    echo "</pre><br><hr>";
}

//we will do a new thing, we will use a list() function

//if this is an associatvie arrry, we must assign keys too with the variables inside the list funciton
//the keys must the same as in the array, the viarlable names can be changed, but i have the same for my ease
//making the data into the tabular form

echo "<table cellpadding='3px' border='1px' width='60%' cellspacing='0'>";
echo "<tr>";
echo "<th>id</th>
		<th>name</th>
		<th>designation</th>
		<th>salary</th>";
echo "</tr>";
foreach ($employess as list("id" => $id, "name" => $name, "designation" => $designation, "salary" => $salary)) {
    //echo "$id $name $designation $salary <br>";
    echo "<tr>";
    echo "<td> $id </td>";
    echo "<td> $name </td>";
    echo "<td> $designation </td>";
    echo "<td> $salary </td>";
    echo "</tr>";
}

echo "</table>";

?>


<link rel="stylesheet" href="style.css">