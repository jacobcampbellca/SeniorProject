  <!--
    MAIN AUTHOR: Justin P.
    Comments/Formatting done by: Justin P.
  -->

<?php

        // Initializes error message variable
    $error='';

        // Checks if the prof has clicked the submit button
    if(isset($_POST['submit']))
    {
            // Places all user-entered data into variables to pe put into the table
        $classId = $_POST['class_id'];
        $className = $_POST['class_name'];
        $numStudents = $_POST['num_students'];
        $email = "ntorbitzky@lindenwood.edu";
        $app = 0;

            // Connection information for the database
        $conn = mysqli_connect("localhost", "justin", "welcome", "seniorProject");

            // Variable that holds the query to be run in MySQL
        $query = "select classId from classes where classId=? limit 1";

            // Prepares the select statement to protect against SQL injection
        $inject_protect = $conn->prepare($query);
        $inject_protect->bind_param("s", $classId);
        $inject_protect->execute();
        $inject_protect->bind_result($classId);
        $inject_protect->store_result();
        if($inject_protect->fetch())
        {
                // If there's a result, then that means the prof already has this class in the database
            $error = "Class already created.";
        }
        else
        {
                // Class ID is reinserted into the variable
            $classId = $_POST['class_id'];

                // Query that inserts the data into the table
            $query2 = "insert into classes values (\"$classId\", \"$className\", \"$numStudents\", \"$email\", \"$app\")";

                // Query is executed
            mysqli_query($conn, $query2);

                // Lets the user know that the class was added
            $error = 'Class created!';
        }
            // Closes the connection to the database
        mysqli_close($conn);
    }

?>