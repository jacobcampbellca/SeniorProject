  <!--
	MAIN AUTHOR: Justin P.
	Additional Author: Rishika S.
	Comments/Formatting done by: Justin P.
	CSS/HTML done by: Grayson C.
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

	<!-- Buttons to return to the homepage and to sign off -->
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  	<section class="hero-wrap js-fullheight">
  		<br>  
    	<a href="faculty_homepage.php" class="btn btn-primary" style="position: absolute; margin-left:50px;">Back to Home</a>
		<a href="signout.php" class="btn btn-primary" style="position: absolute; margin-left:1100px;">Sign Out</a>
	
	  <?php
	  		// Lets the prof know that the class was approved
		if (!empty($_GET['succes'])) 
		{
			echo '<div class="text text-center alert-success">';
			echo '<h2>Your class is approved now</h2></div>';
		}
			// HTML to format the table
		echo '<div class="overlay"></div>';
      	echo '<div class="container">';
        echo '<div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">';
		echo '<div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">';
		
			// Connection to the database
		$conn = mysqli_connect('localhost', 'justin', 'welcome', 'seniorProject');

			// Query to be ran
		$query = "select classId, className, totalStudents from classes";

			// Query stored in a result
		$result = $conn->query($query);

			// Checks if there are classes to list for the professor
		if($result->num_rows > 0)
		{
				// Creates an accordian button that lets the professor check the students
				// that have registered for the class
			echo '<div class="text text-center">';
			echo '<h2> Please click each class to see the students signed up so far.</h2>';

				// Variable to separate the accordian buttons
			$classes = 0;

				// Lists the class IDs in each button
			while ($row = $result->fetch_assoc())
			{
				echo '<div class="panel-group" id="accordion">';
				echo '<div class="panel panel-default">';
				echo '<div class="panel-heading>';
				echo '<h4 class="panel-title">';	
				echo '<button class="btn btn-primary py-4 px-5" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$classes.'">';
				echo $row['classId'].'</button></h4></div><div id="collapse'.$classes.'" class="panel-collapse collapse in">';

					// A second query to be ran to list the students in each different class
				$query2 = "select * from students where classId ='".$row['classId']."'";
				$result2 = $conn->query($query2);

					// If there is at least one student registered for the class, then they are listed 
				if($result2->num_rows > 0)
				{
					echo '<div class="panel-body"><table align="center" style="color:black;" cellpadding="4">';
					echo '<tr><th colspan="2">Name: </th><th colspan="2"> Bio: </th><th colspan="2"></th></tr>';

						// Inserts the students names into the accordian button
					while ($row2 = $result2->fetch_assoc())
					{
							// Adds new rows to the table
						echo '<tr><td colspan="2">'.$row2['fname'].' '.$row2['lname'].'</td><td colspan="2">'.$row2['bio'].'</td>';
						echo '<td style="border: 0;">';
						echo '<a href="delete.php?studentEmail='.$row2['studentEmail'].'" class="btn btn-primary">Remove Student</a></td></tr>';
					}
						// Ends the table
					echo '</table></div>';
				}
				else
				{
						// Lets the professor know if there are no students registered yet
					echo '<br><h4>No students have signed up yet.</h4><br>';
				}

					// Buttons that approve the class and allow the prof to delete the class with a pop-up window
				echo '<a value="release" href="approve.php?id='.$row['classId'].'" class="btn btn-primary">Approve Class</a>';
				echo '<a class="btn btn-primary" href=\'delete_class.php?className="'.$row["className"];
				echo '"\' onclick="return confirm(\'Are you sure you wish to delete the class '.$row['className'].'?\');">Delete Class</a>';
				echo '</div></div></div><br>';

					// Increments classes variable
				$classes++;
			}
			echo '</div></div></div>';
		}
		else
		{
				// Lets the professor know that they have no classes in the database
			echo '<div class="text text-center">';
			echo '<h2>No classes added.<br>';
			echo 'Click <a href="create_class.php">here</a> to add a class.</h2></div>';
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
