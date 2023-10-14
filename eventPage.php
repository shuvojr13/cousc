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
  <title>Events</title>
</head>
<body>
      <div
        class="header d-flex flex-row mx-auto py-2 align-items-center justify-content-center justify-content-md-between"
      >
        <img
          src="assets/cousc.jpeg"
          alt
          class="navbar-brand rounded px-2 px-md-4 d-block"
          height="75px"
        />
        <h1 class="text-white text-center">Comilla University Science Club</h1>
        <img
          src="assets/cou.png"
          alt
          class="navbar-brand rounded-circle px-2 px-md-4 d-block"
          height="75px"
        />
      </div>
  <nav class="navbar navbar-expand-lg navbar-dark py-2">
    <div class="container-fluid">
      <button
        class="navbar-toggler mb-4"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- <a class="navbar-brand fs-2 px-1" href="#">Comilla University Science Club</a> -->
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navitem mx-3 navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a
              class="nav-link active fs-4 px-3 text-center"
              aria-current="page"
              href="index.php"
              >Home</a
            >
          </li>
          <li class="nav-item fs-4 px-3 text-center">
            <a class="nav-link text-white" href="noticePage.php">Notice</a>
          </li>
          <li class="nav-item fs-4 px-3 text-center">
            <a class="nav-link text-white" href="eventPage.php">Events</a>
          </li>
          <li class="nav-item fs-4 px-3 text-center">
            <a class="nav-link text-white" href="memeberPage.php">Member</a>
          </li>
          <li class="nav-item fs-4 px-3 text-center">
            <a class="nav-link text-white" href="gallaryPage.php">Gallary</a>
          </li>
          
          <li class="nav-item fs-4 px-3 text-center">
            <a class="nav-link text-white" href="admin/adminLogin.php">Admin</a>
          </li>
        </ul>
        <form class="d-flex mx-3">
          <input
            class="form-control me-2 px-2 w-100"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn btn-outline-light" type="submit">
            Search
          </button>
        </form>
      </div>
    </div>
  </nav>
  <style>
    .bg-event{
    background-color: rgb(222, 232, 241);
    }
    .title {
        background: linear-gradient(45deg, rgb(84, 51, 138), rgb(51, 95, 136));
      }

  </style>
  <div class="">
    <h2 class="text-center p-4 fw-bold  title fs-1 text-white">Events</h2>
     <?php include('eventdata.php'); ?>
  </div>