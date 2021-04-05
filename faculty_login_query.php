  <!--
    MAIN AUTHOR: Justin P.
    Comments/Formatting done by: Justin P.
  -->
  
<?php
        // Starts the login session and initiallizes the error and connection variables
    session_start();
    $error = '';
    $conn = '';

        // If the user submits their credentials, then the database makes sure those credentials
        // are correct with what's in the database
    if(isset($_POST['submit']))
    {
            // Inserts user created data into variables
        $email = $_POST['email'];
        $pass = $_POST['pwd'];

            // Establishes connection to database
        $conn = mysqli_connect("localhost", "justin", "welcome", "seniorProject");

            // Enters a query into a variable to prep for the login
        $query = "select email, password from instructors where email=? and password=? limit 1";

            // Prepares the query statement to protect from SQL injection
        $inject_protect = $conn->prepare($query);
        $inject_protect->bind_param("ss", $email, $pass);
        $inject_protect->execute();
        $inject_protect->bind_result($email, $pass);
        $inject_protect->store_result();
        if($inject_protect->fetch())
        {   
                // Sends the user to the homepage if they're credentials
                // are valid
            $_SESSION['login'] = $email;
            header("location: faculty_homepage.php");
        }
        else
        {
                // Gives an error message if the user entered in wrong credentials
            $error = "Email or password is invalid.";
        }
            // Closes the connection to the database
        mysqli_close($conn);
    }
?>