<?php
session_start();
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password is empty in XAMPP
$database = "schedule_123";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>