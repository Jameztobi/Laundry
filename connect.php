<?php

$host = 'localhost';
$user = 'root';
$pass = 'Sunday2938';
$db_name = 'landry';

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}