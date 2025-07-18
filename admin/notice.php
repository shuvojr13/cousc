<?php
session_start();


require_once "database.php";

$sql = "SELECT * FROM notice";
$result = $conn->query($sql);
?>
        <h3 class="text-center mt-4 mb-3">Manage News</h3>
        <p class="text-center">Here you can manage the news posted on the site. You can add, view, and delete news items.</p>
        <div class="d-flex justify-content-center align-items-center m-4 p-4 rounded shadow-lg">
            <a href="noticeForm.php" class="btn btn-danger fs-3 px-4 fw-bold">Add News</a>
        </div>
<?php
if ($result->num_rows > 0) {
    echo "<table class='table table-light table-bordered text-center table-hover shadow-lg p-3'> ";
    echo "<tr><th>Title</th><th>Description</th><th>Delete</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["title"] . "</td><td>" . $row["date"] ."</td><td><a href='deleteNotice.php?id=$row[id]' class='btn btn-danger'>Delete</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "<p class='bg-white p-3 text-center fw-bold shadow-lg'>No records found</p>";
}
$conn->close();
// Everything is Set 
?>
