<?php
session_start();
error_reporting(0);

if ($_SESSION["login"] == false) {
  header('Location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    * {
      box-sizing: border-box;
    }

    html,
    body {
      width: 100%;
      max-width: 100%;
    
      /* Remove horizontal scroll */
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, sans-serif;
    }

  

    img {
      max-width: 100%;
      height: auto;
    }

    .bg-color {
      background-color: #0f033a;
    }

    .nav-link {
      color: white !important;
    }

    .navbar-toggler {
      background-color: white;
    }

    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='black' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }
  </style>
</head>

<body>
  <!-- Admin Header -->
  <div class="bg-color p-3 text-center text-white">
    <h2 class="fw-bold fs-1">Admin Panel</h2>
  </div>

  <!-- Responsive Navbar -->
  <nav class="navbar navbar-expand-lg bg-color">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="adminNavbar">
      <ul class="navbar-nav flex-column flex-lg-row justify-content-center">

          <li class="nav-item mx-2">
            <a class="nav-link btn btn-success my-1" onclick="Clear()"><i class="bi bi-person-bounding-box"></i> Admin</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link btn btn-primary my-1" onclick="events()"><i class="bi bi-caret-right-fill"></i> Events</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link btn btn-primary my-1" onclick="notices()"><i class="bi bi-caret-right-fill"></i> News </a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link btn btn-primary my-1"><i class="bi bi-caret-right-fill"></i> Admin Member</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link btn btn-primary my-1" onclick="member()"><i class="bi bi-caret-right-fill"></i> Approve Member</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link btn btn-primary my-1" onclick="upload()"><i class="bi bi-caret-right-fill"></i> Upload Images</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link btn btn-primary my-1"><i class="bi bi-shield-lock-fill"></i> Password Update</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link btn btn-danger my-1" onclick="logOut()"><i class="bi bi-box-arrow-in-right"></i> Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content Area -->
  <div class="container mt-4">
    <div id="root" class="bg-light p-3 shadow rounded mx-auto text-center">
      <h2>Welcome to the Admin Panel</h2>
      <p>Select an option from the menu to manage the site.</p>
    </div>
  </div>

  <!-- Scripts -->
  <script>
    async function events() {
      const response = await fetch('event.php');
      const text = await response.text();
      document.getElementById('root').innerHTML = text;
    }

    async function member() {
      const response = await fetch('member.php');
      const text = await response.text();
      document.getElementById('root').innerHTML = text;
    }

    async function notices() {
      const response = await fetch('notice.php');
      const text = await response.text();
      document.getElementById('root').innerHTML = text;
    }

    async function upload() {
      const response = await fetch('gallaryUpload.php');
      const text = await response.text();
      document.getElementById('root').innerHTML = text;
    }

    function logOut() {
      window.location.href = "../index.php";
    }

    function Clear() {
      document.getElementById('root').innerHTML = "<h2>Welcome to the Admin Panel</h2><p>Select an option from the menu to manage the site.</p>";
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>