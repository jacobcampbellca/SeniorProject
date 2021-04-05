  <!--
    MAIN AUTHOR: Justin P.
    Comments/Formatting done by: Justin P.
  -->
  
<?php
        // Retrieves the student email from the student to be deleted
    $email = $_GET['studentEmail'];

        // Continues the login session of the user, establishes
        // a connection to the database, and runs a query to remove
        // the student from the class
    session_start();
    $conn = mysqli_connect('localhost', 'justin', 'welcome', 'seniorProject');
    $query = "delete from students where studentEmail=\"$email\"";

        // If the query is successful, the student is removed
        // from the database and the professor is returned to the 
        // class list
    if (mysqli_query($conn, $query))
    {
        header('location: faculty_classes.php');
        exit;
    }
?>