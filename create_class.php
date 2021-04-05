  <!--
    MAIN AUTHOR: Justin P.
    Comments/Formatting done by: Justin P.
    HTML/CSS done by: Grayson C. & Caring D.
  -->
<?php
    // Includes the php file to run the error codes and add a new class to the database
  include('create_class_query.php');
?>

<!DOCTYPE html>
<html lang="en">

    <!-- Link the css/bootstrap files to html -->
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

    <!-- Navigation options for professor to sign out/go back -->
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <br>  
    <a href="faculty_homepage.php" class="btn btn-primary" style="position: absolute; margin-left:50px; z-index: 500;">Back to Home</a>
	  <a href="signout.php" class="btn btn-primary" style="position: absolute; margin-left:1100px; z-index: 500;">Sign Out</a>
    <section class="ftco-no-pb goto-here" id="resume-section">

        <!-- Header that contain directions for the professor -->
      <div class="col-md-12 heading-section text-center ftco-animate">
        <br>
        <h2 class="mb-4">Create a Class</h2>
          <p>Please enter the class ID, the course name, and the total number of students in the class.<br></p>
      </div>
    	<div class="container">
    	  <div class="row">
    		  <div class="col-md-3">
          </div>
			  <div class="col-md-9">
				  <div id="page-1" class= "page one">
					  <form action="" method="post">
						  <div class="form-group" >
                    
                  <!-- Asks prof for class ID, name of course, and number of students in the class -->
                <h5> What is the class ID?</h5>
                ex. PHY10000
                <input type="text" class="form-control" placeholder="Class ID" name="class_id" required>
                <br>
                <h5> What is the name of the course?</h5>
                <input type="text" placeholder="Course Name" name="class_name" required>
                <br>
                <br>
                <h5> How many students are in the class?</h5>
                <input type="number" id="num_students" name="num_students" min="1" max="50" required>
                <br>
              </div>
                  <!-- Returns an error message from the create_class_query php file -->
                <span><h7><?php echo $error; ?></h7></span><br>
                <input type="submit" name="submit" value="Create!" class="btn btn-primary py-3 px-5">
            </form>
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