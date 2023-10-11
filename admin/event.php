<?php
session_start();
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "cousc"; 

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM event";
$result = $conn->query($sql);
?>
        <div class="d-flex justify-content-center align-items-center m-4 p-4">
            <a href="eventForm.php" class="btn btn-primary fs-3 px-4 fw-bold">Create Events</a>
        </div>
<?php
if ($result->num_rows > 0) {
    echo "<table class='table table-light table-bordered text-center table-hover shadow-lg p-3'> ";
    echo "<tr><th>Title</th><th>Description</th><th>Date</th><th>Delete</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["title"] . "</td><td>" . $row["description"] . "</td><td>" . $row["date"] . "</td><td><a href='delete.php?id=$row[id]' class='btn btn-danger'>Delete</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "<p class='bg-white p-3 text-center fw-bold shadow-lg'>No records found</p>";
}
$conn->close();
// Everything is Set 
?>
