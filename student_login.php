  <!--
    MAIN AUTHOR: Justin P.
    Comments/Formatting done by: Justin P.
    CSS/HTML done by: Caring D.
  -->

<?php
    // Includes the php file that produces error messages for login
  include('student_login_query.php');
  if(isset($_SESSION['studlogin']))
  {
      // Sends the user to the homepage if they still have a session
    header("location: profiles_loading.php");
  }
?>

<!DOCTYPE html>
  <html>
    <head>
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
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
      <div class="container">
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav nav ml-auto">
            <li class="nav-item">
                <!-- A button to return to the homepage -->
              <a href="index.php" class="nav-link">
              <span>Homepage</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      </nav>

      <section class="hero-wrap js-fullheight">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
            <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
              <div class="text text-center">
                <span class="subheading"></span>
                    <!-- Prompts the user for their login info -->
                  <h1>Student Login</h1>
                  <div class="form-group">
                    <form action="" method="post">
                      <label><h5>Email&nbsp</h5></label>
                      <input type="text" id="email" name="email" required><br>
                      <label><h5>Password&nbsp</h5></label>
                      <input type="password" id="pwd" name="pwd" required><br>
                      <div class="form-group">
                        <input name="submit" type="submit" value="Go!" class="btn btn-primary py-3 px-5">
                      </div>
                        <!-- Produces the error message provided by the beginning php file -->
                      <span><h7><?php echo $error; ?></h7></span>
                    </form>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        <!-- Loader -->
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