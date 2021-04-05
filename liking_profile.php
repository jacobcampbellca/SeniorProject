  <!--
    MAIN AUTHOR: Rishika S.
    Comments/Formatting done by: Rishika S.
    CSS/HTML done by: Grayson C.
  -->

<?php session_start(); ?>

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

	  
	  <section class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
          <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
          	<div class="text text-center">

<!-- Sign out of the student's profile -->
    <form action="signout.php">
		<button class="btn btn-primary" style="position: absolute; right: 0;" >Sign Out</button></form>
<br><br>

<!-- Introduction for the students to like or dislike each others profiles -->
<!-- Liking someone's profile will not necessarily mean they will be placed in a group with them -->

		<h2>Everyone in your class is listed below with their name and a short bio.</h2>
		<h3>You need to go through and either "like" or "dislike" every person.</h3>
		<p style="color:black;">By 'liking' a profile you may be placed with them for this semester's discussion group. By 'disliking' a profile you may not be placed with them for this semester's discussion group. We can't make any promises though! :)</p>
<br><br>

<?php
$conn = mysqli_connect('localhost', 'justin', 'welcome', 'seniorProject');
  $query2 = "select * from classes where classId ='".$_SESSION['studentClass']."'";
  $result2 = $conn->query($query2);
  $data = $result2->fetch_assoc();

  if($data['approved']=='0'){ ?>
  <div class="text text-center alert-danger">
        <h2>This class is not

          approved for making groups 

          yet please wait for

           everyone to signup before 
           
           submitting your like/dislike.

           Check back in Later. 

           Thank you.
         </h2>
        
			</div>
  <?php }
  



  ?>
<!-- Centered table showing all of the classmates name and bio with like/dislike buttons-->
<!-- Table will have the data outlined while the buttons will not be outlined -->

<form method="POST" action = "response.php">
	<table align ="center" style="color:black;">
	<tr>
		<th>Name </th>
		<th>Bio Data</th>
		<th >Like</th>
		<th>Dislike</th>
	</tr>
    <?php
  
	$conn = mysqli_connect('localhost', 'justin', 'welcome', 'seniorProject');
  $query2 = "select * from students where studentEmail != '".$_SESSION['studlogin']."' and classId ='".$_SESSION['studentClass']."'";
	$result2 = $conn->query($query2);
	if($result2->num_rows > 0)
	{
	echo '<div class="panel-body"><table align="center" style="color:black;">';
	echo '<tr><th colspan="2"> </th></tr>';
	while ($row2 = $result2->fetch_assoc())
    { 
      
      $name = 'like_'.$row2['studentEmail'].'[]';
      ?>

<tr>
    <td><?=$row2['fname'].' '.$row2['lname']?></td>
    <td><?=$row2['bio'] ?></td>
    <td>  <label for="like">Like</label> <input type="radio" value="1" name="<?=$name?>"></td>
    <td>  <label for="dislike">DisLike</label><input type="radio" value="0" name="<?=$name?>"></td>
  </tr>

      <!-- echo '<tr><td colspan="2">'.$row2['fname'].' '.$row2['lname'].'
        "BIO": '.$row2['bio'].' <input type="radio" value="0" name="like" required>
        <label for="male">Like</label>
        <input type="radio" value="1" name="like">
        <label for="female">Dislike</label></td></tr>'; -->


   <?php  }
	// Ends the table
	echo '</table></div>';
	}
	else
	{
	// Lets the professor know if there are no students registered yet
	echo '<br><h4>No students have signed up yet.</h4><br>';
	}
?>
  </table>
</form>
<br>


	

<!-- Button to the next page -->
		
	<a href="groupLoading.html" class="btn btn-primary" style="position: absolute; right: 1;">Next</a>

	</div>
	</div>
	</div>
	</div>
	</section>


  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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