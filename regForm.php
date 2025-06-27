<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />
    <link rel="icon" type="image/x-icon" href="assets/favicon.jpeg">
     <link rel="stylesheet" href="CSS/style.css" />
    <link rel="stylesheet" href="color.css">

</head>

<body class="bg-light">
    <?php include "nav.php" ?>
    <br>
    <div class="bg-danger text-white py-4 px-3 text-center">
        <h2 class="fs-1 fw-bold">Member Registration - CoU Science Club, Comilla University</h2>
    </div>
    <div class="container my-5 ">
        <div class="row justify-content-center ">
            <div class="col-md-6 ">
                <div class="card shadow border border-2  border-danger">
                    <div class="card-header bg-danger text-white text-center fw-bold fs-2 w-100">
                        Registration Form
                    </div>
                    <div class="card-body">
                        <form action="regForm.php" method="post" class="" enctype="multipart/form-data">
                            <h4 class="bg-white ">Personal Information</h4>
                            <hr>
                            <div class="mb-3 bg-light p-2 ">
                                <label for="name" class="form-label fw-bold">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                            </div>
                            <div class="mb-3 bg-light p-2 ">
                                <label for="dob" class="form-label fw-bold">Date of Birth: </label>
                                <input type="date" id="dob" name="dob" required>
                            </div>
                            <div class="mb-3 bg-light p-2 ">
                                <label for="gender" class="form-label fw-bold">Gender</label><br>

                                <label>
                                    <input type="radio" name="gender" value="male">
                                    Male
                                </label>
                                <label>
                                    <input type="radio" name="gender" value="female">
                                    Female
                                </label>
                                <label>
                                    <input type="radio" name="gender" value="other">
                                    Other
                                </label>
                            </div>
                            <div class="mb-3 bg-light p-2 ">
                                <label for="email" class="form-label fw-bold">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3 bg-light p-2 ">
                                <label for="mobile" class="form-label fw-bold">Mobile Number</label>
                                <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Enter your mobile number" required>
                            </div>
                            <div class="mb-3 bg-light p-2 ">
                                <label for="image" class="form-label fw-bold">Upload Image</label>
                                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                            </div>
                            <!-- Academic -->
                            <h4 class="bg-white ">Academic Details</h4>
                            <hr>


                            <div class="mb-3 bg-light p-2 ">
                                <label for="batch" class="form-label fw-bold">University Batch</label>
                                <input type="text" class="form-control" id="name" name="batch" placeholder="Enter your batch " required>
                            </div>
                            <div class="mb-3 bg-light p-2 ">
                                <label for="roll" class="form-label fw-bold">Roll / Reg. No</label>
                                <input type="text" class="form-control" id="name" name="roll" placeholder="Enter Your Roll " required>
                            </div>
                            <div class="mb-3 bg-light p-2 ">
                                <label for="session" class="form-label  fw-bold">Session </label>
                                <input type="text" class="form-control" id="session" name="session" placeholder="Enter your session" required>
                            </div>
                            <div class="mb-3 bg-light p-2 ">
                                <select class="form-select" name="department" aria-label="Default select example">
                                    <option selected>Select Your Department</option>
                                    <option value="ICT">ICT</option>
                                    <option value="CSE">CSE</option>
                                    <option value="Mathmatics">Mathmatics</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Pharmacy">Pharmacy</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Statistic">Statistic</option>
                                </select>
                            </div>



                            <hr>
                            <div class="mb-3  p-2">
                                <label for="scienceInterest" class="form-label fw-bold">Brief statement about your interest in science:</label><br>
                                <textarea id="scienceInterest" name="scienceInterest" rows="4" cols="50"></textarea>
                            </div>
                            <div class="mb-3  p-2">
                                <label for="science_experience" class="form-label fw-bold">Relevant Background or Experiences in Science-related Activities:</label>
                                <textarea id="science_experience" name="science_experience" rows="4" cols="50" placeholder="Enter your experiences"></textarea>
                            </div>
                            <!-- ... (other form fields) ... -->

                            <div class="mb-3 p-2">
                                <label for="futurePlans" class="form-label fw-bold">Brief explanation about your future plans and activities as a club member:</label><br>
                                <textarea id="futurePlans" name="futurePlans" rows="4" cols="50"></textarea>
                            </div>

                            <!-- ... (rest of the form) ... -->

                           
                            <label for="agreement">
                                <input type="checkbox" id="agreement" name="agreement" required>
                                I agree to abide by the rules and regulations of Comilla University Science Club.
                            </label><br><br>
                            <button type="submit" name="submit" class="btn btn-primary px-4">Submit</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>


    </div>
   

    <?php include "footer.php" ?>
</body>

</html>





<?php
require_once "admin/database.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // Escape user inputs for security
    function sanitize($data)
    {
        global $conn;
        return mysqli_real_escape_string($conn, $data);
    }

    // Retrieve form data
    $name = sanitize($_POST['name']);
    $dob = sanitize($_POST['dob']);
    $gender = sanitize($_POST['gender']);
    $email = sanitize($_POST['email']);
    $mobile = sanitize($_POST['mobile']);
    $batch = sanitize($_POST['batch']);
    $roll = sanitize($_POST['roll']);
    $session = sanitize($_POST['session']);
    $department = sanitize($_POST['department']);
    $scienceInterest = sanitize($_POST['scienceInterest']);
    $scienceExperience = sanitize($_POST['science_experience']);
    $futurePlans = sanitize($_POST['futurePlans']);
    
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $upload_dir = "member/$image";
    move_uploaded_file($image_tmp, $upload_dir);


    // SQL query to insert data into member table
    $sql = "INSERT INTO member (name, dob, gender,image, email, mobile, batch, roll, session, department, science_interest, science_experience, future_plans) 
            VALUES ('$name', '$dob', '$gender', '$image','$email', '$mobile', '$batch', '$roll', '$session', '$department', '$scienceInterest', '$scienceExperience', '$futurePlans')";

    if ($conn->query($sql) === TRUE) {
?>
        <script>
            window.location.href = 'pdf.php';
        </script>
<?php
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>