  <!--
    MAIN AUTHOR: Justin P.
	Comments/Formatting done by: Justin P.
  -->

<?php
        // Starts a session for a user so they don't have to log-in everytime
        // the page is refreshed
    session_start();

        // Initilizes error message and connection info
    $error = '';
    $conn = '';

        // If the submit button is pressed to login, then the code executes
    if(isset($_POST['submit']))
    {

            // Takes the email and password entered by the user and prepares
            // the information to be entered into a query to prevent sql injection
        $email = $_POST['email'];
        $pass = $_POST['pwd'];
        $conn = mysqli_connect("localhost", "justin", "welcome", "seniorProject");
        $query = "select * from students where studentEmail=? and password=? limit 1";
        $inject_protect = $conn->prepare($query);
        $inject_protect->bind_param("ss", $email, $pass);
        $inject_protect->execute();
        
        $data = $inject_protect->get_result()->fetch_array(MYSQLI_ASSOC);

            // If the email or password exists in the database then the user is 
            // brought to the appropriate page. If username/password don't match
            // what's in the database then an error message is provided to the user
        if(!empty($data))
        {
            $_SESSION['studlogin'] = $email;
            $_SESSION['studentClass'] = $data['classId'];
            header("location: profiles_loading.php");
        }
        else
        {
            $error = "Email or password is invalid.";
        }
            // Closes the connection to the database
        mysqli_close($conn);
    }
?>