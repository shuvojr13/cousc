<?php 


require_once "admin/database.php";

$itemsPerPage = 10;
if (isset($_GET['page'])) {
    $currentPage = $_GET['page'];
} else {
    $currentPage = 1;
}

$offset = ($currentPage - 1) * $itemsPerPage;
$sql = "SELECT * FROM gallary LIMIT $itemsPerPage OFFSET $offset";
$result = $conn->query($sql);


$totalItems = $result->num_rows ; /* Get the total number of items from the database */;
$totalPages = ceil($totalItems / $itemsPerPage);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css"
    />
    <link rel="icon" type="image/x-icon" href="assets/favicon.jpeg">
    <title>CoUSC</title>
</head>
<?php include "nav.php" ?>
<body>

<?php
echo '<div class="row d-flex align-items-center justify-content-center">';
echo '<h1 class="bg-danger text-white text-center fs-1 fw-bold p-4 ">Gallary - CoU Science Club</h1>';
echo '<div class="col-10">';
if ($result->num_rows > 0) {
    $count = 0;
    while ($row = $result->fetch_assoc()) {
        // Start a new row for every two images
        if ($count % 2 === 0) {
            echo '<div class="row m-1">';
        }

        echo '<div class="col-6">';
        echo '<img src="admin/images/' . $row['image'] . '" class="w-100"/>';
        echo '</div>';

        // Close the row div after the second image
        if ($count % 2 === 1) {
            echo '</div>';
        }

        $count++;
    }

    // If there's an odd number of images, close the last row
    if ($count % 2 === 1) {
        echo '</div>';
    }
} else {
    echo "No results found.";
}
echo '</div>';
echo '</div>';
?>

    <div class="d-flex justify-content-center align-items-center">
        <?php
        for ($i = 1; $i <= $totalPages; $i++) {
            echo "<a href='?page=$i' class='btn btn-primary mx-3 my-4 fw-bold'>$i</a> ";
        }
        ?>
    </div>
    
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
<?php include "footer.php" ?>
</html>
<?php
$conn->close();
?>