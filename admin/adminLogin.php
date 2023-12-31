<?php error_reporting(0); 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #f06a6a, #6fa6f6);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            width: 400px;
            padding: 40px;
            text-align: center;
            border: 4px solid blueviolet;
            margin:2px 4px;
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: blueviolet;
            border-bottom: 4px solid blueviolet;
            padding:10px;
        }
        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-bottom: 2px solid #ccc;
            outline: none;
            font-size: medium;
        }
        .login-form button {
            background-color: #f06a6a;
            font-size: medium;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .login-form button:hover {
            background-color: #e25858;
        }
        .login-form p {
            margin-top: 15px;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <form action="login.php" method="post" class="login-form">
            <input type="text" placeholder="Username" name="username" required>
            <input type="password" id="password" placeholder="Password" name="password" required>
            <input type="checkbox" id="show-password" onclick="togglePassword()">Show Password
            <p class="fs-6"> Use a mix of upper and lowercase letters, numbers, and symbols for Passwords.</p>
            <button type="submit" name="submit">Login</button>
            <p>Forgot password? <a href="#">Reset here</a></p>
        </form>
        
        <?php 
            
            if($_SESSION["login_error"]){
                echo '<p class="fw-bold fs-3"> Invalid Username or Password , Please Try Again </p>';
            }
        ?>
    </div>
    <script>
        function togglePassword() {
            var passwordInput = document.getElementById('password');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        }

    </script>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

