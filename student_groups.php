  <!--
    MAIN AUTHOR: Justin P.
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

    <!-- Navigation button and a signout button -->
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <br>  
	  <a href="signout.php" class="btn btn-primary" style="position: absolute; margin-left:1100px;">Sign Out</a>
	  <section class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
          <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">

          <?php
                // Connects to the database and stores the result of the query into a variable
            $conn = mysqli_connect('localhost', 'justin', 'welcome', 'seniorProject');
            $query = "select classId, className, approved from classes where approved != 0 ";
            $result = $conn->query($query);

                // If there is a result, then the class of the result is displayed
            if ($result->num_rows > 0)
            {
                  // Prints the classes and groups to the student so that they may find their group in their class
                echo '<div class="text text-center">';
                echo '<h2>Here are the groups for the approved classes.</h2>';
              while($class = $result->fetch_assoc())
              {
                    // Class of approved groups
                echo '<br><br><h2>'.$class['className'].' ('.$class['classId'].')</h2>';
                  // Runs the query to get the groups table
                $groupsQuery = "select * from groups where classId=\"".$class['classId']."\"";
                $groupsResult = $conn->query($groupsQuery);

                  // This prints all groups to the page
                while ($group = $groupsResult->fetch_assoc())
                {
                  echo '<h3>Group '.$group['groupNum'].'</h3>';
                  echo '<table align="center" style="color:black;" cellpadding="4">';
                  if ($group['s1'] != " ")
                  {
                    echo '<tr><td colspan="2">'.$group['s1'].'</td></tr>';
                  }
                  if ($group['s2'] != " ")
                  {
                    echo '<tr><td colspan="2">'.$group['s2'].'</td></tr>';
                  }
                  if ($group['s3'] != " ")
                  {
                    echo '<tr><td colspan="2">'.$group['s3'].'</td></tr>';
                  }
                  if ($group['s4'] != " ")
                  {
                    echo '<tr><td colspan="2">'.$group['s4'].'</td></tr>';
                  }
                  if ($group['s5'] != " ")
                  {
                    echo '<tr><td colspan="2">'.$group['s5'].'</td></tr>';
                  }
                  echo '</table><br><br>';
                }
              }
            } 
            else
            {
                    // If no classes have been approved then the professor is made aware of
                    // that instead of displaying groups
                header("location: groupLoading.html");
            }

          ?>
          </div>
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