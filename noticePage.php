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
  <title>Notices</title>
</head>
<body>
<?php include "nav.php" ?>
  <style>
    .bg-event{
    background-color: rgb(222, 232, 241);
    }
    .title {
        background: linear-gradient(45deg, rgb(84, 51, 138), rgb(51, 95, 136));
      }
      .bgn-color{
        background-color:rgb(223, 219, 247);
      }
     

  </style>
  <div class="mx-auto">
    <h2 class="text-center p-4 fw-bold  title fs-1 text-white">Notices</h2>
     <?php include('noticedata.php'); ?>
  </div>
  <?php include "footer.php" ?>