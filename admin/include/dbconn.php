<?php
// Define your database connection parameters
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'qr_ea';

// Create a mysqli connection
$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}