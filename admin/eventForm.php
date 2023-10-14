<?php error_reporting(0); session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Event Form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<style>
  body {
   
    background-image: url('../assets/bgimg.jpg');
    
   
  }
  
  .container {
    max-width: 500px;
    margin: auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
  }
  
  .form-group label {
    font-weight: bold;
    color: #343a40;
  }
  
  .form-control:focus {
    border-color: #6c757d;
    box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.25);
    font-size:medium;
    padding:20px;
    outline:none;
  }
  
  .btn-primary {
    background-color: #007bff;
    border-color: #007bff;
  }
  
  .btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
  }
</style>
</head>
<body>
<div class="container mt-4 p-3 border border-3 border-primary">
  <h2 class="text-center mb-4 text-white p-2 bg-dark rounded fw-bold">Admin Event Form</h2>
  <form class="bg-light rounded p-2" action="eventForm.php" method="post" enctype="multipart/form-data">
    <div class="form-group p-3">
      <label for="eventTitle">Event Title</label>
      <input type="text" class="form-control" id="eventTitle" name="title" required>
    </div>
    <div class="form-group p-3">
      <label for="eventDescription">Event Description</label>
      <textarea class="form-control" id="eventDescription" name="description" rows="3" required></textarea>
    </div>
    <div class="form-group p-3">
      <label for="imageFile">Image File</label>
      <input type="file" class="form-control-file" id="imageFile" name="image" accept="image/*" required>
    </div>
    <div class="form-group p-3">
      <label for="submitDate">Event's Date</label>
      <input type="date" class="form-control" id="submitDate" name="date" required>
    </div>
    <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-block px-4 py-2 mt-2">
    <a href="admin.php" class="btn btn-danger btn-block px-4 py-2 mt-2">Go Back</a>
  </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>

<?php

require_once "database.php";



// Get the form data
$title = $_POST['title'];
$description = $_POST['description'];
$image = $_FILES['image']['name'];
$date = $_POST['date'];

 //$upload_dir = "images";
  // Create an SQL INSERT statement
  $sql = "INSERT INTO event (title, description, image, date) VALUES (:title, :description, :image, :date)";

  
  
  // Prepare the SQL statement
  $stmt = $db->prepare($sql);
  $stmt->bindParam(':title', $title);
  $stmt->bindParam(':description', $description);
  $stmt->bindParam(':image', $image);
  $stmt->bindParam(':date', $date);
  $stmt->execute();
  
  move_uploaded_file($_FILES['image']['tmp_name'], "images/$image");




// Close the database connection
$db = null;

// Redirect the user to a success page
header('Location: admin.php');

?>



