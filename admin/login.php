<?php
     session_start();
     error_reporting(0) ;
     
     require_once "database.php";



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
function validate_password($password) {
    
  
    $regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*()_+=-])(?=.{6,})$/';
  
    return preg_match($regex, $password);
  }
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // if (validate_password($password)) {
    //     $_SESSION["login_error"] = false;
    //   } else {
    //     echo '<script>alert("Your password is invalid. Please enter a strong password with at least 6 characters, including a mix of upper and lowercase letters, numbers, and special characters.");</script>';
    //     $_SESSION["login_error"] = true;
       
    // }
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
