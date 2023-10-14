<?php 
session_start();
$_SESSION["login"] = false;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/style.css" />
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
    <title>CoUSC</title>
  </head>
  <body>
    <style>
      body {
        background-image: url("assets/bgimg.jpg");
      }
    </style>
    <!-- <h2 class="text-center border border-4 p-2 m-2">Comilla University Science Club</h2> -->
    <div class="container-fluid">
      <!-- Nav Section -->
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
                  href="#"
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
      <!-- Carousel -->
      <div class="container-fluid  d-flex justify-content-center my-3">
        <div
          id="carouselExampleIndicators"
          class="container carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="2"
              aria-label="Slide 3"
            ></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="assets/imgcou.jpg"
                class="d-block w-100 rounded"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="gallary/24.jpeg"
                class="d-block w-100 rounded"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="gallary/19.jpeg"
                class="d-block w-100 rounded"
                alt="..."
              />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <style>
        .text-justify {
          text-align: justify;
        }
        .bg-color {
          background-color: rgb(133, 5, 60);
        }
        .bg-naviblue{
        background-color: rgb(36, 77, 90);
        }
        .custom-link {
          text-decoration: none;
          color: lightgray;
        }
        .custom-link:hover {
          color: orange;
          padding: 5px;
          font-size: 18px;
          text-decoration: underline;
        }
        .resize:hover{
          padding:20px;
          font-size: 18px;
        }
        .bg-dna{
        background-image: url('assets/bg3.gif');
        background-repeat: no-repeat;
        background-size: cover;
        }
        .bg-footer{
          background-color:rgb(32, 7, 56);
        }
      </style>
      <div
        class="container my-4 border border-1 border-dark p-3 bg-white rounded shadow-lg"
      >
        <h3 class="text-white bg-color text-center rounded p-4">
          Welcome to the World of Innovation: Comilla University Science Club
        </h3>
        <p class="text-center p-2 fs-4 fw-bold">
          <q><i>Know The Science , Know The Universe</i></q>
        </p>
        <hr />
        <div class="initial-content">
          <p class="text-justify px-4 py-2 bg-light rounded">
            Welcome to the world of exploration, innovation, and scientific
            curiosity! Comilla University Science Club, an esteemed organization
            dedicated to promoting the wonders of science, officially embarked on
            its journey on September 1, 2015. The club is committed to fostering a
            culture of scientific inquiry and knowledge dissemination through a
            diverse range of science-based activities.
          </p>
          <h5 class="px-4">Science-based Activities and Initiatives</h5>
          <p class="text-justify px-4 py-2 bg-light rounded">
            Comilla University Science Club thrives on engaging its members and
            the community in various science-oriented endeavors. Among its primary
            activities, science chats serve as a platform for passionate
            individuals to discuss scientific breakthroughs, research, and
            exciting discoveries. The club actively participates in popularizing
            science among schools and colleges as well as shaping curricula to
            enhance the understanding and appreciation of scientific principles
            among students. One of the club's standout initiatives includes space
            observation, where members explore the celestial wonders and celestial
            events, sparking interest in astronomy and astrophysics. Film
            exhibitions featuring science-related documentaries and movies are
            regularly organized to disseminate knowledge in an enjoyable and
            informative manner. The club has been organizing National Science Days
            every year with great interest, among them Pi Day and biography
            seminars on the birthdays of various legendary scientists. The Club
            also runs a robotics workshop to encourage students to build robots.
            Another regular event of the club is organizing Scientific Talks by
            inviting renowned scientists. Comilla University Science Club is
            working as a role model for the opening and activities of science
            clubs in schools and colleges of Comilla region.
          </p>
      </div>
      <div class="hidden-content">
        <h5 class="px-4">Achievements and Milestones</h5>
        <p class="text-justify px-4 py-2 bg-light rounded">
          In just its second year of establishment, Comilla University Science
          Club achieved remarkable success by participating in the prestigious
          NASA Space App Challenge. The club's two teams secured separate
          accolades, clinching the second and tenth places, a testament to their
          dedication and expertise. Later, The club's excellence in the NASA
          Space Apps Challenge has been consistently recognized, with two
          consecutive first-place rankings in the Chittagong Region, further
          solidifying its reputation as a formidable force in the realm of space
          exploration and technology. Furthermore, the club has consistently
          displayed its prowess in scientific presentations and competitions. In
          2017, at the Science Festival, held at Jahangirnagar University, the
          club secured the third position in the poster presentation category.
          The club has also taken the initiative to organize the largest science
          festival in the Comilla region, attracting the participation of
          approximately 2500 students from various schools and colleges.
        </p>
        <h5 class="px-4">Innovations and Technological Advancements</h5>
        <p class="text-justify px-4 py-2 bg-light rounded">
          Comilla University Science Club has left an indelible mark on the
          scientific landscape of Bangladesh through its groundbreaking
          creations. A notable achievement includes the development of the
          fourth humanoid robot in the country, affectionately named 'SINA.' The
          project was a collaborative effort with the Bangladesh Rural
          Development Academy, Cumilla, showcasing the club's ability to foster
          partnerships and engage in cutting-edge research. Comilla University
          Science Club members have been instrumental in developing numerous
          robots including Advanced Robot, BlueBerry, Quanta, etc. by utilizing
          their innovative talents. And robotics school has also been
          established under the leadership of club members, where students are
          given basic education in making robots, learning programming as well
          as working on robotics technology. In 2017, Comilla University Science
          Club produced a science based magazine called Bigyan Kathan. Also the
          club members are constantly creating drones, school, college and
          university level science based projects, posters and numerous research
          proposal. We believe from the bottom of our hearts that these works
          will play a leading role in the development of Comilla University as
          well as the technology sector of Bangladesh.
        </p>
        <h5 class="px-4">Join the Journey of Discovery</h5>
        <p class="text-justify px-4 py-2 bg-light rounded">
          With a passion for science and a commitment to pushing the boundaries
          of knowledge, Comilla University Science Club invites you to join its
          exciting journey of exploration and innovation. Whether you are a
          student, a science enthusiast, or someone who wishes to contribute to
          the scientific community, the club welcomes you to be a part of their
          inspiring endeavors. Together, let's embrace the wonders of science
          and make a positive impact on society and the world at large.
        </p>
      </div>
      <button class="btn btn-danger read-more-button px-4">Read More</button>
        
        
      </div>
      
    
      <!-- Links -->
      <div class="container">
        <div
          class="d-flex align-items-center justify-content-center gap-2 my-2"
        >
         
           <div class="row row-cols-1">
            <a
            class="col btn btn-danger rounded fs-4 shadow   border fw-bold p-2"
            >Alumni Association <i class="bi bi-arrow-up-right-square-fill"></i></a
          >
          <a
            class="col btn btn-danger rounded fs-4 shadow   border fw-bold p-2 "
            >Our Activities <i class="bi bi-arrow-up-right-square-fill"></i></a
          >
          <a
            class="col btn btn-danger rounded fs-4 shadow   border fw-bold p-2 "
            >CoUSC Admnistration <i class="bi bi-arrow-up-right-square-fill"></i></a
          >
           </div>
         
        </div>
      </div>
      <!-- Messages from Club member -->
      <div class="container-fluid bg-naviblue rounded m-1">
       
        <div class="row row-cols-1  d-flex align-items-stretch justify-content-center gap-3 pt-5">
          <div class="col col-md-3  p-2">
              <img src="assets/lab.gif" alt="Images" class="rounded w-100 h-75 border border-light">

          </div>
          <div class="col col-md-3  p-2">
            <img src="assets/dna.gif" alt="Images" class="rounded w-100 h-75 border border-light">

          </div>
          <div class="col col-md-3  p-2">
            <img src="assets/lab3.gif" alt="Images" class="rounded  w-100 h-75 border border-light">

          </div>
        </div>
      </div>
      <!-- Images -->
    
      <!-- Section -->
      <div class="container my-5">
        <div class="card shadow-lg border border-2 border-danger">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="assets/man.jpg" class="card-img" alt="Your Image" />
            </div>

            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title fs-2 fw-bold">Aman Ullah</h5>
                <h6 class="card-subtitle mb-2 text-muted fs-4">President</h6>
                <hr />
                <p class="card-text bg-light p-2 rounded">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Molestiae consequatur vitae aut impedit vel deleniti inventore
                  accusantium explicabo velit enim.Description goes here. This
                  is a sample description. Description goes here. This is a
                  sample description.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container my-5">
        <div class="card shadow-lg border border-2 border-danger">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="assets/evan.jpg" class="card-img h-100 w-100" alt="Your Image" />
            </div>

            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title fs-2 fw-bold">Jahid
                  Hossain Bhuiyan (Evan)</h5>
                <h6 class="card-subtitle mb-2 text-muted fs-4">
                  General Secretary
                </h6>
                <hr />
                <div>
                  <div class="initial-content-evan">
                    <p class="card-text text-justify bg-light p-2 rounded">
                     "Welcome to the Comilla University Science Club! I'm Jahid
                     Hossain Bhuiyan (Evan), serving as the General Secretary of
                     the Comilla University Science Club. It is an honor to be part
                     of this dynamic organization dedicated to fostering scientific
                     curiosity and innovation among our university community. We
                     are proud to be a thriving hub of scientific curiosity and
                     exploration in the Cumilla region. Our club is dedicated to
                     promoting a passion for science, fostering innovation, and
                     creating a community of like-minded individuals who are
                     enthusiastic about the wonders of the natural world.
                    </p>
                  </div>
                 <div class="hidden-content hidden-content-evan">
                   <p class="card-text text-justify bg-light p-2 rounded">
                     At the
                    heart of our club's mission is the belief that science is not
                    just a subject to be studied but a journey to be embraced. We
                    provide a platform for students, faculty, and science
                    enthusiasts to come together, exchange ideas, and embark on
                    exciting scientific adventures. Through our diverse range of
                    activities, workshops, and events, we aim to inspire the next
                    generation of scientists, engineers, and problem solvers.
                    Whether you're passionate about physics, biology, chemistry,
                    or any other scientific discipline, there's a place for you
                    here at the Comilla University Science Club. I encourage you
                    to explore our website, learn about our upcoming events, and
                    get involved in our vibrant community. Together, we can
                    unravel the mysteries of the universe and make a positive
                    impact on the world through the power of science. Thank you
                    for being a part of our journey, and I look forward to seeing
                    you at our next event!"
                  </p>
                 </div>
                  <button class="btn btn-danger read-more-button-evan my-2">Read More</button>
                </div>
                
              </div>
             
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="d-flex align-items-center justify-content-center">
          <img src="assets/science.png" alt="Images" class="w-75" />
        </div>
      </div>
      

      <footer>
        <div class="container-fluid bg-footer text-white p-5">
          <div
            class="row row-cols-1 d-flex align-items-center justify-content-around"
          >
            <div class="col col-md-3">
              <h4 class="fw-bold text-center p-1 border border-light rounded">
                <i><i class="bi bi-link-45deg"></i> Quick Links</i>
              </h4>
              <ul class="list-unstyled text-center">
                <li><a href="eventPage.php" class="custom-link">Events</a></li>
                <li><a href="noticePage.php" class="custom-link">Notices</a></li>
                <li><a href="gallaryPage.php" class="custom-link">Gallary</a></li>
                <li><a href="memeberPage.php" class="custom-link">Member</a></li>
                <li><a href="memeberPage.php" class="custom-link">About</a></li>
                <li><a href="memeberPage.php" class="custom-link">Activities</a></li>
              </ul>
            </div>
            <!-- Here We Work -->
            <div class="col col-md-3 d-flex flex-column justify-content-center">
              <h4 class="fw-bold text-center p-1 border border-light rounded">
                <i><i class="bi bi-link-45deg"></i> Developers Team</i>
                
              </h4>
              <a href="developer.php" class="btn btn-primary my-1 mx-4 fw-bold">Visit</a><hr>
              <img src="assets/footer.png" alt="Image" class="w-100  rounded-circle border border-light">
            </div>
            <!-- Contact -->
            <div class="col col-md-3">
              <h4 class="fw-bold text-center p-1 border border-light rounded">
                <i class="bi bi-caret-right-fill"></i> <i>Follow Us</i>
              </h4>
              <div class="text-center">
                <i class="bi bi-facebook px-2"></i>
                <i class="bi bi-linkedin px-2"></i>
                <i class="bi bi-twitter px-2"></i>
                <i class="bi bi-instagram px-2"></i>
              </div>
              <hr />
              <h4 class="fw-bold text-center p-1 border border-light rounded">
                <i class="bi bi-caret-right-fill"></i> <i>Contact Us</i>
              </h4>
              <div class="text-center">
                <ul class="list-unstyled text-center">
                  <li><i class="bi bi-envelope-at"></i> cousc@gmail.com</li>
                  <li><i class="bi bi-telephone-fill"></i> 8801714-777777</li>
                  <li><i class="bi bi-whatsapp"></i> 8801717-565656</li>
                  <li><i class="bi bi-browser-chrome"></i> www.cousc.com</li>
                </ul>
              </div>
            </div>
          </div>
          <hr />
          <p class="text-center">Copyright &copy; CoUSC | Developed by Shuvo</p>
        </div>
      </footer>
    </div>
    <style>
      .paragraph-container {
        max-width: 600px; /* Adjust this based on your design */
        margin: 0 auto;
        overflow: hidden;
    }
    
    .hidden-content {
        display: none;
    }
    
    .read-more-button {
        background: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
    }
    
    </style>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
          const button = document.querySelector(".read-more-button");
          const hiddenContent = document.querySelector(".hidden-content");
  
          button.addEventListener("click", function() {
              if (hiddenContent.style.display === "none" || hiddenContent.style.display === "") {
                  hiddenContent.style.display = "block";
                  button.textContent = "Read Less";
              } else {
                  hiddenContent.style.display = "none";
                  button.textContent = "Read More";
              }
          });
      });
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
        const button = document.querySelector(".read-more-button-evan");
        const hiddenContent = document.querySelector(".hidden-content-evan");

        button.addEventListener("click", function() {
            if (hiddenContent.style.display === "none" || hiddenContent.style.display === "") {
                hiddenContent.style.display = "block";
                button.textContent = "Read Less";
            } else {
                hiddenContent.style.display = "none";
                button.textContent = "Read More";
            }
            
        });
    });
</script>
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
