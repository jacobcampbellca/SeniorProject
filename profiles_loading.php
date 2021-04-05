  <!--
    MAIN AUTHOR: Rishika S.
    Comments/Formatting done by: Rishika S.
  -->

<?php
    // Includes the php file that produces error messages for login
  include('profile_loading_form.php');
  if(isset($_SESSION['studlogin']))
  {
      // Sends the user to the homepage if they still have a session
    header("location: profiles_loading.php");
  }
?>


<!DOCTYPE html>
<html lang="en">
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
	          <li class="nav-item"><a class ="btn btn-primary" href="signout.php"><span>Sign Out</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <a href="liking_profile.php" class="btn btn-primary" style="position: absolute; left: 1;">Join Group</a>
    <a href="student_groups.php" class="btn btn-primary" style="position: absolute; right: 1;">View my group</a>
<br><br>

   
  
  </body>
</html>