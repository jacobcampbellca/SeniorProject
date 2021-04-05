  <!--
    MAIN AUTHOR: Justin P.
    Comments/Formatting done by: Justin P.
  -->
  
<?php   
        // Connection to the database
    $conn = mysqli_connect("localhost", "justin", "welcome", "seniorProject");

        // Starts the session
    session_start();

        // Sets username to login credentials so the user is redirected to homepage
        // when they land on the login page
    $user = $_SESSION['login'];
    $query = "select email from instructors where email = '$user'";
    $check_conn = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($check_conn);
    $login = $row['email'];
?>