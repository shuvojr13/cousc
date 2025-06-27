<?php
require_once "admin/database.php";


$sql = "SELECT * FROM member ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);


$lastInsertedRow = [];

if ($result->num_rows > 0) {
    $lastInsertedRow = $result->fetch_assoc();
}


$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />
    <link rel="icon" type="image/x-icon" href="assets/favicon.jpeg">
    <link rel="stylesheet" href="CSS/style.css" />
    <link rel="stylesheet" href="color.css">

</head>
<?php include"nav.php" ?>
<body>
    <!-- Displaying the last inserted row data -->
    <div class="bg-light d-flex flex-column justify-content-center align-items-center m-4 p-5 ">
        <div class="d-flex flex-row mx-auto py-2 align-items-center justify-content-center justify-content-md-between">
            <img src="assets/cousc.jpeg" alt class="navbar-brand rounded px-2 px-md-4 d-block" height="50px" />
            <h1 class="text-dark text-center fw-bold">Comilla University Science Club</h1>
            <img src="assets/cou.png" alt class="navbar-brand rounded-circle px-2 px-md-4 d-block" height="50px" />
        </div>
        <h2 class="bg-danger text-white p-2 w-100 text-center">Member Registration Form</h2>
        <table class="table table-light table-hover table-bordered text-center mx-4">


            <tr>
                <th>Name</th>
                <td><?= $lastInsertedRow['name'] ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?= $lastInsertedRow['email'] ?></td>
            </tr>
            <tr>
                <th>Department</th>
                <td><?= $lastInsertedRow['department'] ?></td>
            </tr>
            <tr>
                <th>Date of Birth</th>
                <td><?= $lastInsertedRow['dob'] ?></td>
            </tr>
            <tr>
                <th>Reg./Roll No.</th>
                <td><?= $lastInsertedRow['roll'] ?></td>
            </tr>
            <tr>
                <th>Session</th>
                <td><?= $lastInsertedRow['session'] ?></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><?= $lastInsertedRow['gender'] ?></td>
            </tr>
            <tr>
                <th>University Batch</th>
                <td><?= $lastInsertedRow['batch'] ?> </td>
            </tr>
            <tr>
                <th>Mobile</th>
                <td><?= $lastInsertedRow['mobile'] ?></td>
            </tr>
            <tr>
                <th>Interest in science</th>
                <td><?= $lastInsertedRow['science_interest'] ?></td>
            </tr>
            <tr>
                <th>Experience in science</th>
                <td><?= $lastInsertedRow['science_experience'] ?></td>
            </tr>
            <tr>
                <th>Future Plans for CoUSC</th>
                <td><?= $lastInsertedRow['future_plans'] ?></td>
            </tr>



        </table>
        <p class="fs-5 fw-bold" id="msg">Download Your Registration Information. Its must need for upcoming events.</p>
        <!-- ... Your HTML code ... -->

        <button id="downloadButton" class="btn btn-primary" onclick="downloadAsPDF()">Download as PDF</button>

        <script>
            function downloadAsPDF() {
                // Hide the button before printing
                document.getElementById('downloadButton').style.display = 'none';
                document.getElementById('msg').style.display = 'none';

                // Initiating print after a small delay to ensure the button is hidden before printing
                setTimeout(() => {
                    window.print();
                    // Show the button again after printing is done (optional)
                    document.getElementById('downloadButton').style.display = 'block';
                    document.getElementById('msg').style.display = 'block';

                }, 100);
            }
        </script>

        <!-- ... Rest of your HTML code ... -->

    </div>


    <div>

    </div>
</body>

</html>