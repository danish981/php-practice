<?php

echo "<br>we will learn multi dimensional associative arrays<br><hr>";

//in this associative array, names are the keys, and subjects are the keys
$marks = [
    "salman" => ["chemistry" => 89, "biology" => 32, "physics" => 39],
    "burhan" => ["chemistry" => 48, "biology" => 93, "physics" => 45],
    "waleed" => ["chemistry" => 38, "biology" => 60, "physics" => 65],
    "ikraam" => ["chemistry" => 86, "biology" => 40, "physics" => 55],
    "nabeel" => ["chemistry" => 82, "biology" => 96, "physics" => 85],
    "wajiha" => ["chemistry" => 89, "biology" => 32, "physics" => 39],
    "aminaa" => ["chemistry" => 48, "biology" => 93, "physics" => 45],
    "fatima" => ["chemistry" => 38, "biology" => 60, "physics" => 65],
    "ayesha" => ["chemistry" => 86, "biology" => 40, "physics" => 55],
    "yasmin" => ["chemistry" => 82, "biology" => 96, "physics" => 85]
];

//we will display this in the tabular form, lets do it

function display_array_tabular($array) {        //this funtion prints only this student data,
    echo "<br><table border='1px' cellpadding='5' width='60%' cellspacing='2'>";
    echo "<tr>";
    echo "<th> Name </th>";
    echo "<th> Chemistry </th>";
    echo "<th> Biology </th>";
    echo "<th> Physics </th>";
    echo "<tr>";
    foreach ($array as $key => $value) {
        echo "<tr>";
        echo "<td> $key </td>";        //key is data too, we consider
        foreach ($value as $data_value) {
            echo "<td> $data_value </td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

display_array_tabular($marks);

?>

<link rel="stylesheet" href="style.css">