<?php 
session_start();
error_reporting(0) ;

if($_SESSION["login"] == false){
    header('Location: ../index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css"
    />
    <title>Admin</title>
</head>
<body>
    <style>
        .bg-color{
        background-color: #0f033a;
        }
        .bg-image{
            background-image: url('../assets/admin1.gif');
            background-repeat: no-repeat;
           background-size: cover;
            
        }
        a{
            text-decoration: none;
            color:white;
        }
    </style>
    <div class="container-fluid">
        <div class="row row-cols-1">
            <div class="col col-md-12 bg-color">
                <h2 class="text-center text-white fw-bold fs-1 p-4 vw-100">Admin Panel</h2>
            </div>
            <div class="col col-md-3 p-4 bg-color shadow text-white vh-100">
                <ul class="list-unstyled d-flex flex-column">
                    <li class="mx-3 btn btn-success  fw-bold px-2 py-1 my-1" onclick="Clear()"><i class="bi bi-person-bounding-box px-2"></i> Admin </li>
                    <li class="mx-3 btn btn-primary  fw-bold px-2 py-1 my-1" onclick="events()"><i class="bi bi-caret-right-fill px-2"></i>Events</li>
                    <li class="mx-3 btn btn-primary  fw-bold px-2 py-1 my-1" onclick="notices()"><i class="bi bi-caret-right-fill px-2"></i>Notices</li>
                    <li class="mx-3 btn btn-primary  fw-bold px-2 py-1 my-1"><i class="bi bi-caret-right-fill px-2"></i>Admin Member</li>
                    <li class="mx-3 btn btn-primary  fw-bold px-2 py-1 my-1"><i class="bi bi-caret-right-fill px-2"></i>Administration Member</li>
                    <li class="mx-3 btn btn-danger  fw-bold px-2 py-1 my-1" onclick="logOut()"><i class="bi bi-box-arrow-in-right px-2"></i>Log Out</li>
                </ul>
            </div>
            <div class="col col-md-9 bg-image d-flex align-items-center justify-content-center" >
                <div class="" id="root"></div>
            </div>
        </div>
       
               
            <script>
                async function events() {
                  const response = await fetch('event.php');
                  const text = await response.text();
                
                  document.getElementById('root').innerHTML = text;
                }
                async function notices() {
                  const response = await fetch('notice.php');
                  const text = await response.text();
                
                  document.getElementById('root').innerHTML = text;
                }
                function logOut(){
                    <?php // $_SESSION["login"] = false; ?>
                    window.location.href = "../index.php";
                }
                function Clear(){
                    document.getElementById('root').innerHTML = "";
                }
                
            </script>
                
    </div>
            

    <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"
  ></script>
</body>
</html>