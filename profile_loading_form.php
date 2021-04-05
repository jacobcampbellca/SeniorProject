  <!--
    MAIN AUTHOR: Rishika S.
    Comments/Formatting done by: Rishika S.
  -->

<?php
	// Connection to the database
	$conn = mysqli_connect('localhost', 'justin', 'welcome', 'seniorProject');
	$query2 = "select fname, lname, bio, classId from students";
	$result2 = $conn->query($query2);
	// If there is at least one student registered for the class, then they are listed 
	if($result2->num_rows > 0)
	{
	echo '<div class="panel-body"><table align="center" style="color:black;">';
	echo '<tr><th colspan="2">The classmates who have signed up </th></tr>';
	// Inserts the students names into the accordian button
	while ($row2 = $result2->fetch_assoc())
	{
		if ($row2['classId'] == "CSC43000")
		{
				// Adds new rows to the table
			echo '<tr><td colspan="2">'.$row2['fname'].' '.$row2['lname'].'
			"BIO": '.$row2['bio'].' </td></tr>';
		}
	}
	// Ends the table
	echo '</table></div>';
	}
	else
	{
	// Lets the professor know if there are no students registered yet
	echo '<br><h4>No students have signed up yet.</h4><br>';
	}
?>

