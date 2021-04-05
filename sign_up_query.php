  <!--
    MAIN AUTHOR: Justin P.
	Comments/Formatting done by: Justin P.
  -->
  
<?php

        // Initializes the error message
    $error = '';

        // Checks if the user clicked the submit button
    if(isset($_POST['submit']))
    {
            // If the passwords don't match, then the user has to start over
        if($_POST['pwd'] != $_POST['confirmpwd'])
            {
                $error = "Passwords do not match.";
            }
        else
        {

                // Stores all the form information into variables to insert
                // into the database
            $email = $_POST['email'];
            $classId = $_POST['classId'];
            $pass = $_POST['pwd'];
            $passConf = $_POST['confirmpwd'];
            $fname = $_POST['first_name'];
            $lname = $_POST['last_name'];
            $gender = $_POST['gender'];
            $q1 = $_POST['location'];
            $q2 = $_POST['fear'];
            $q3 = $_POST['stress'];
            $q4 = $_POST['major'];
            $q5 = $_POST['sport'];
            $bio = $_POST['bio'];
            $timestamp = date('d-M-Y H:i:s');
            $app = 0;

                // Connects to the database and runs the query in a protected format to
                // prevent SQL injection
            $conn = mysqli_connect("localhost", "justin", "welcome", "seniorProject");
            $query = "select studentEmail from students where studentEmail=? limit 1";
            $query2 = "select classId from classes where classId=? limit 1";
            $inject_protect = $conn->prepare($query);
            $inject_protect->bind_param("s", $email);
            $inject_protect->execute();
            $inject_protect->bind_result($email);
            $inject_protect->store_result();
            if($inject_protect->fetch())
            {
                    // Prevents the same student from registering twice
                $error = "Email already registered.";
            }
            else
            {
                    // Protects from SQL injection
                $inject_protect = $conn->prepare($query2);
                $inject_protect->bind_param("s", $classId);
                $inject_protect->execute();
                $inject_protect->bind_result($classId);
                $inject_protect->store_result();
                if($inject_protect->fetch())
                {
                        // Makes sure that the class exists already and then adds the student to the database
                    $classId = $_POST['classId'];
                    $email = $_POST['email'];
                    $query2 = "insert into students values (\"$email\", \"$pass\", \"$fname\", \"$lname\", \"$bio\", 
                    \"$classId\", \"$gender\", \"$q1\", \"$q2\", \"$q3\", \"$q4\", \"$q5\", \"$timestamp\", \"$app\")";
                    mysqli_query($conn, $query2);
                    header("location: student_login.php");
                }
                else
                {
                        // Doesn't let the user register with an invalid class ID or if the class has not been
                        // created by the professor yet
                    $error = "Class not found. Check class ID and check again.";
                }
            }
                // Closes the connection to the database
            mysqli_close($conn);
        }
    }
?>