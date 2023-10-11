<?php
     session_start();
     error_reporting(0) ;
     
    $conn = new mysqli("localhost","root","","cousc");

    if ($conn->connect_error)
    {
        die ("Connection failed: ".$conn->connect_error);
    }



// Function to validate admin login
function validateAdminLogin($username, $password, $conn) {
    // Sanitize input to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Query the database to check if the admin exists
    $query = "SELECT * FROM admins WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    // Check if a matching admin record was found
    if (mysqli_num_rows($result) == 1) {
        return true; // Admin login is valid
    } else {
        return false; // Admin login is invalid
    }
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (validateAdminLogin($username, $password, $conn)) {
        $_SESSION["login_error"] = false;
        $_SESSION["login"] = true;
        
        header('Location: admin.php');
        exit;

    } else {
        $_SESSION["login_error"] = true;
        header('Location: adminLogin.php');
        exit;

    }
}

// Close the database connection
mysqli_close($conn);
?>
