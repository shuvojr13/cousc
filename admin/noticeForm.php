<?php error_reporting(0); session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Notice Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
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
      outline: none;
    }

    .btn {
      width: 100%;
        background: linear-gradient(45deg, #043667, #052652);
        color: white;
        border: none;
        padding: 10px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        cursor: pointer;
        margin: 10px auto;

    }
 .btn:hover{
  color:#fff;
}
    .text-color {
      background-color: #043667 !important;
      color: #fff;
    }
  </style>
</head>
<body>
  <div class="container mt-4">
    <h2 class="text-center text-color p-2 rounded fw-bold">Admin Notice Form</h2>
    <form class="bg-light rounded p-3" action="" method="post" enctype="multipart/form-data">
      <div class="form-group mb-3">
        <label for="eventTitle">Title</label>
        <input type="text" class="form-control" name="title" required>
      </div>
      <div class="form-group mb-3">
        <label for="eventDescription">Description</label>
        <textarea class="form-control" name="description" rows="3" required></textarea>
      </div>
      <div class="form-group mb-3">
        <label for="link">PDF Link (optional)</label>
        <input type="text" class="form-control" name="link">
      </div>
      <div class="form-group mb-3">
        <label for="images">Upload Images (optional)</label>
        <input type="file" class="form-control" name="images[]" multiple accept="image/*">
      </div>
      <input type="submit" name="submit" value="Submit" class="btn mb-2">
      <a href="admin.php" class="btn">Go Back</a>
    </form>
  </div>
</body>
</html>

<?php
require_once "../config.php";

if (isset($_POST['submit'])) {
    date_default_timezone_set('Asia/Dhaka');
    $title = $_POST['title'];
    $description = $_POST['description'];
    $link = $_POST['link'];
    $date = date('Y-m-d');
    $time = date('H:i:s');

    // Process multiple image uploads
    $uploaded_images = [];

    if (!empty($_FILES['images']['name'][0])) {
        $upload_dir = './images/'; 
        foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
            $image_name = time() . '_' . basename($_FILES['images']['name'][$key]);
            $target_file = $upload_dir . $image_name;

            if (move_uploaded_file($tmp_name, $target_file)) {
                $uploaded_images[] = $image_name;
            }
        }
    }

    $images_string = implode(',', $uploaded_images);

    // SQL insert
    $sql = "INSERT INTO notice (title, description, link, images, time, date)
            VALUES (:title, :description, :link, :images, :time, :date)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':link', $link);
    $stmt->bindParam(':images', $images_string);
    $stmt->bindParam(':time', $time);
    $stmt->bindParam(':date', $date);
    $stmt->execute();

    echo "<script>alert('Notice submitted successfully!'); location.href='admin.php';</script>";
}
?>
