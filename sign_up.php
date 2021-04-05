  <!--
    MAIN AUTHOR: Justin P.
	Comments/Formatting done by: Justin P.
	CSS/HTML: Caring D.
  -->

<?php
	// includes the sign up query for error messages and signing up
  include('sign_up_query.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  		<!-- Title tab -->
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
    <section class=" ftco-no-pb goto-here" id="resume-section">
			<!-- Introduction to what the user needs to do to register -->
        <div class="col-md-12 heading-section text-center ftco-animate">
        	<br>
        	<h2 class="mb-4">Ok, Lets Talk About You!</h2>
			<p>We are going to ask you a few questions so all your classmates get a glimpse of you.<br> 
			We ask you to answer honestly so your future group is generated in the best way possible.<br></p>
    
        </div>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-3"></div>
				<div class="col-md-9">
					<div id="page-1" class= "page one">
							<!-- Provides an error if needed -->
						<span><h7><?php echo $error; ?></h7></span>

					  		<!-- The rest is the form in which every field is required -->
						<h2 class="heading">Basic Information</h2>
						<div class="resume-wrap d-flex ftco-animate">
					    	<form action="" method="post">
  									<!-- User email entered here -->
					    		<div class="form-group" >
									<h5>Enter your school email</h5>
               	 					<input type="text" class="form-control" placeholder="School Email" name="email" maxlength="40" required>
								</div>
  									<!-- User enters class ID here -->
								<div class="form-group">
									<h5>Enter the Class ID</h5>
									<input type="text" class="form-control" placeholder="ex. PHY10000" name="classId" required>
								</div>
  									<!-- User enters password here -->
								<div>
									<h5>Enter a Password</h5>
									<input type="password" class="form-control" placeholder="Password" name="pwd" id="pwd" maxlength="30" required><br>
								</div>
  									<!-- User confirms password here -->
								<div>
									<h5>Confirm Password</h5>
									<input type="password" class="form-control" placeholder="Confirm Password" name="confirmpwd" maxlength="30" required>
								</div>
								<br>
  									<!-- User enters first name here -->
								<div>
									<h5>First Name</h5>
									<input type="text" class="form-control" placeholder="First Name" name="first_name" maxlength="30" required>
								</div>
								<br>
  									<!-- User enters last name here -->
								<div>
									<h5>Last Name</h5>
									<input type="text" class="form-control" placeholder="Last Name" name="last_name" maxlength="30" required>
								</div>
							  		<!-- Question 1 -->
             					<div>
             						<h5> How do you identify yourself?</h5><p>
						  			<input type="radio" value="male" name="gender" required>
						  			<label for="male">Male</label><br>
  									<input type="radio" value="female" name="gender">
  									<label for="female">Female</label><br>
  									<input type="radio" value="rather not to say" name="gender">
 						 			<label for="other">Rather not to say</label></p>
								</div>
							  		<!-- Question 2 -->
								<div>
									<h5>Where is home?</h5><p>
									<input type="radio" value="missouri" name="location" required>
									<label for="missouri">Missouri</label><br>
									<input type="radio" value="not_far" name="location">
									<label for="not_far">Not far, still from the midwest</label><br>
									<input type="radio" value="elsewhere" name="location">
									<label for="elsewhere">Elsewhere in the U.S</label><br>
									<input type="radio" value="latin" name="location">
									<label for="latin">Latin America</label><br>
									<input type="radio" value="europe" name="location">
									<label for="europe">Europe</label><br>
									<input type="radio" value="asia" name="location">
									<label for="asia">Asia</label><br>
									<input type="radio" value="africa" name="location">
									<label for="africa">Africa</label><br>
									<input type="radio" value="middle" name="location">
									<label for="middle">Middle East</label><br>
									<input type="radio" value="other" name="location">
									<label for="other">Elsewhere</label></p>
								</div>
									<!-- Question 3 -->
								<div>
									<h5>When you were a child, what was one of your biggest fears?</h5><p>
									<input type="radio" value="dark" name="fear" requried>
									<label for="dark">Darkness</label><br>
									<input type="radio" value="ghosts" name="fear">
									<label for="ghosts">Ghosts</label><br>
									<input type="radio" value="alone" name="fear">
									<label for="radio">Being alone</label><br>
									<input type="radio" value="monsters" name="fear">
									<label for="monsters">Monsters</label><br>
									<input type="radio" value="doc" name="fear">
									<label for="doc">Doctor/Shots</label><br>
									<input type="radio" value="other" name="fear">
									<label for="other">Other</label></p>
								</div>
									<!-- Question 4 -->
								<div>
									<h5>What do you do when you're stressed?</h5><p>
									<input type="radio" value="plan" name="stress" required>
									<label for="plan">Plan vigerously</label><br>
									<input type="radio" value="talk" name="stress">
									<label for="talk">Talk about it</label><br>
									<input type="radio" value="exercise" name="stress">
									<label for="exercise">Workout/Exercise</label><br>
									<input type="radio" value="think" name="stress">
									<label for="think">Think about something else</label><br>
									<input type="radio" value="other" name="stress">
									<label for="other">Other</label><br>
									</p>
								</div>
									<!-- Question 5 -->
								<div>
									<h5>What area is your major in?</h5><p>
									<input type="radio" value="bus" name="major" required>
									<label for="bus">Business</label><br>
									<input type="radio" value="sci" name="major">
									<label for="sci">Science</label><br>
									<input type="radio" value="art" name="major">
									<label for="art">Art</label><br>
									<input type="radio" value="med" name="major">
									<label for="med">Medicine</label><br>
									<input type="radio" value="media" name="major">
									<label for="media">Media</label><br>
									<input type="radio" value="hum" name="major">
									<label for="hum">Humanities</label><br>
									<input type="radio" value="not" name="major">
									<label for="not">Undecided/Other Major</label>
									</p>
								</div>
									<!-- Question 6 -->
								<div>
									<h5>What sport do you play for school?</h5><p>
									<input type="radio" value="none" name="sport" required>
									<label for="none">I don't</label><br>
									<input type="radio" value="soc" name="sport">
									<label for="soc">Soccer</label><br>
									<input type="radio" value="bask" name="sport">
									<label for="bask">Basketball</label><br>
									<input type="radio" value="ten" name="sport">
									<label for="ten">Tennis</label><br>
									<input type="radio" value="foot" name="sport">
									<label for="foot">Football</label><br>
									<input type="radio" value="hock" name="sport">
									<label for="hock">Hockey</label><br>
									<input type="radio" value="other" name="sport">
									<label for="other">Other</label>
									</p>
								</div>
									<!-- User writes a short bio about themselves here -->
								<div>
									<h5>Write a short bio about yourself here.</h5><p>
									<textarea rows="4" cols="25" placeholder="Maximum of 255 characters" name="bio" maxlength="255" required></textarea>
									</p>
								</div>
									<!-- This is where the user will accept the terms and conditions -->
								<div>
									<h1> Terms & Conditions</h1>
									<h5>In order to create your profile and help you match with teammates that <u>you will actually like</u> we need to gather some basic information about you. We ask for your permission to display this information with your classmates and faculty in order to generate the groups that you will be part of for the rest of the semester. </h5>
									<h5>Your profile will be deleted by the professor when they have finished utilizing this web app.</h5><br>
									<span class="subheading">By creating your profile you will be accepting <br> these terms & conditions</span><br><br>
								</div>
								<div class="form-group">
									<input name="submit" type="submit" value="All done!" class="btn btn-primary py-3 px-5">
								</div>
							</form>	
							<div class="resume-wrap d-flex ftco-animate"></div>
						</div>
					</div>
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