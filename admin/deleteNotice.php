<?php
session_start();
// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'cousc');

// Create the SQL query to delete the row
$sql = "DELETE FROM notice WHERE id = ?";

// Prepare the query statement
$stmt = mysqli_prepare($conn, $sql);

// Bind the parameter to the statement
mysqli_stmt_bind_param($stmt, 'i', $id);

// Get the ID of the row to be deleted
$id = $_GET['id'];

// Execute the query
mysqli_stmt_execute($stmt);

// Check the result of the query
if (mysqli_stmt_affected_rows($stmt) > 0) {
    header('Location: admin.php');
} else {
    header('Location: admin.php');
}

// Close the database connection
mysqli_close($conn);

?>
