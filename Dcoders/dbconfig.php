<?php
// Database configuration



$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "test_db";
// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>