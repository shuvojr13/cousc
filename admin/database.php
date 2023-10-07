<?php

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password);

if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the database
$sql = "CREATE DATABASE cousc";
$result = $conn->query($sql);

if (!$result) {
    die("Could not create database: " . $conn->error);
}

// Close the connection
$conn->close();

?>
