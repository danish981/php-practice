<?php







$hostname = 'localhost';
$username = 'root';
$password = '';
$dbName = 'test';
$charset = 'utf8mb4';

$dsn = 'mysql:host=' . $hostname . ';dbname=' . $dbName . ';charset=' . $charset;

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    
];

