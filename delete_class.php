  <!--
    MAIN AUTHOR: Justin P.
    Comments/Formatting done by: Justin P.
  -->
  
<?php
        // Checks if a class name was entered
    if(isset($_GET['className']))
    {
            // Inserts the class name into the variable
        $class = $_GET['className'];

            // Connects to the database
        $conn = mysqli_connect('localhost', 'justin', 'welcome', 'seniorProject');

            // Preps the query to be ran
        $query = "delete from classes where className = $class";

            // If the query successfully runs, then the professor is redirected
            // back to the same page to "refresh" the page
        if(mysqli_query($conn, $query))
        {
            header('location: faculty_classes.php');
            exit;
        }
    }
?>