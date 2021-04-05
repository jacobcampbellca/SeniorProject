  <!--
    MAIN AUTHOR: Caring D
    Additional Author: Justin P.
    Comments/Formatting done by: Justin P.
  -->
  
<!DOCTYPE html>
<html lang="en">
  <head>
      <!-- Tab title -->
    <title>Discussion Group Generator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

    <!-- Signout button -->
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <form action="signout.php" method="post"><br>
	  <button class="btn btn-primary" style="margin-left:1100px" style="position: absolute; margin-left: 1100px;">Sign Out</button></form>
	  <section class="hero-wrap js-fullheight">
     <div class="container-fluid px-md-5">
        <div class="row justify-content-center py-5 mt-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
              <p>Welcome Professor,</p>
              <h2 class="mb-4">What Would You Like to Do?</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 text-center d-flex ftco-animate">
            <a href="create_class.php" class="services-1 shadow">
              <span class="icon">
                <i class="flaticon-web-design"></i>
              </span>
              <div class="desc">
                  <!-- Sends the professor to the add class page -->
                <h3 class="mb-5">Create a class</h3>
                <p> Click here if you want to create a class. We will need a class ID and the number of students</p>
              </div>
            </a>
          </div>

          <div class="col-md-4 text-center d-flex ftco-animate">
            <a href="faculty_classes.php" class="services-1 shadow">
              <span class="icon">
                <i class="flaticon-analysis"></i>
              </span>
              <div class="desc">
                  <!-- Sends the professor to the class management page -->
                <h3 class="mb-5">See my Classes</h3>
                <p>You will be able to see all the classes that you have created, edit them, delete them, or see what students have sign up</p>
              </div>
            </a>
          </div>

          <div class="col-md-4 text-center d-flex ftco-animate">
            <a href="faculty_groups.php" class="services-1 shadow">
              <span class="icon">
                <i class="flaticon-idea"></i>
              </span>
              <div class="desc">
                  <!-- Sends professor to the teams page -->
                <h3 class="mb-5">Generate Teams</h3>
                <p>In here, you will be able to generate the teams for the classes, revise them and edit them</p>
              </div>
            </a>
          </div>

      </div>
    </section>

    <!-- loader -->
  <div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
    </svg>
  </div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>
  </body>
</html>