    <!-- 
        MAIN AUTHOR: Rishika S.
        Comments/Formatting done by: Justin P. 
    -->
<?php
        // Tracks the current session
    session_start();

        // Variable holding the database connection sequence
    $conn = mysqli_connect('localhost', 'justin', 'welcome', 'seniorProject');

        // Variable holding the query to be ran
    $query2 = "UPDATE classes SET approved ='1' where classId = '".$_GET['id']."'";

        // If the query is ran successfully, the user is notified that the records
        // are updated and the class is approved; otherwise an error message is 
        // provided to the user if the query does not successfully execute
    if(mysqli_query($conn, $query2))
    {
        echo "Records updated successfully.";
        header('location: faculty_classes.php?succes=1');
    } 
    else
    {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
?>