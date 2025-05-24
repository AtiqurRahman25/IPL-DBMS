<?php
$host = "localhost";
$user = "root"; 
$password = "$!faT1205581908";
$database = "transaction_db";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
