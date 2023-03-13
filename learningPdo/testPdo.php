<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbName = 'practicephp';

// $dbName = 'test';    // do not choose "test" database for your work, it is the simplest dummy DB
$charset = 'utf8mb4';

$dsn = 'mysql:host=' . $hostname . ';dbname=' . $dbName . ';charset=' . $charset;

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

];
