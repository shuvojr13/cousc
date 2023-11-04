<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body class="bg-light">
    <div class="bg-danger text-white py-4 px-3 text-center">
        <h2 class="fs-1 fw-bold">Member Registration - CoU Science Club, Comilla University</h2>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6 ">
                <div class="card shadow border border-2">
                    <div class="card-header bg-danger text-white text-center fw-bold fs-2 w-100">
                        Registration Form
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3 bg-light p-2 ">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                            </div>
                            <div class="mb-3 bg-light p-2 ">
                                <label for="session" class="form-label">Session</label>
                                <input type="text" class="form-control" id="session" name="session" placeholder="Enter your session" required>
                            </div>
                            <div class="mb-3 bg-light p-2 ">
                                <label for="department" class="form-label">Department</label>
                                <input type="text" class="form-control" id="department" name="department" placeholder="Enter your department" required>
                            </div>
                            <div class="mb-3 bg-light p-2 ">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3 bg-light p-2 ">
                                <label for="mobile" class="form-label">Mobile Number</label>
                                <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Enter your mobile number" required>
                            </div>
                            <div class="mb-3 bg-light p-2 ">
                                <label for="image" class="form-label">Upload Image</label>
                                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                            </div>
                            <div class="mb-3 bg-light p-2 ">
                              <label for="payment" class="form-label">B-kash Transaction ID <b>( BDT 100.00 Taka)</b></label>
                              <input type="text" class="form-control" id="payment" name="payment" placeholder="Enter Transaction ID" required>
                          </div>
                            <button type="submit" class="btn btn-primary px-4">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
