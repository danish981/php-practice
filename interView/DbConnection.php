<?php

$connection = mysqli_connect("localhost", "root", "", "test");

if ($connection) {
    echo "connection established\n";
} else {
    echo "connection failed\n";
}

$queryResult = mysqli_query($connection, "SELECT * FROM users");

$totalResultsFound = 0;
while ($row = mysqli_fetch_row($queryResult)) {
    print_r($row);
    $totalResultsFound++;
}

echo "\n\nTotal results found are $totalResultsFound\n";