  <!--
    MAIN AUTHOR: Juan A.
	Comments/Formatting done by: Juan A.
	
	Team Notes: This file was not used in the final project as it was not integrated into the
	rest of the PHP files and made to work.
  -->

<?php

$host = $_POST["host"];
$user = $_POST["user"];
$pass = $_POST["password"];
$dbName = $_POST["dbName"];

$teamNum = $_POST["teamNum"];//number of desired teams to be generated

	//(Main matching algorithm method) returns a 2D array, where each //dimension is an id and their value is their match coefficient 
	public static function matchCoefficient()
	{
		$q1x=null,$q2x=null,$q3x=null,$q4x=null,$q5x=null,$q6x=null,$q7x=null,$q8x=null,$q9x=null;

		$profileArrX = array();//holds x student q's set

		$q1y = null,$q2y=null,$q3y=null,$q4y=null,$q5y=null,$q6y=null,$q7y=null,$q8y=null,$q9y=null; 

		$idX = 0, $idY = 0;
		$studentCount = 0;

		$profileArrY = array();
		$idArr = array();
		$matchData = array();//holds sets of id's + their match coefficient 
		

		//(TO BE CHANGED TO ACTUAL DB NAME AND PARAMETERS!!)
		// build the connection ...
		echo "Attempting to connect to DB server: $host ...";
		$conn = mysqli_connect($host, $user, $pass, $dbName);

		//query to connect to student name/id db table
		$queryString = "select name, id, from STUDENT_T ";
		//query for access to db table
		$status = mysqli_query($conn, $queryString);

		if (!$status) die("Error running query: " . mysqli_error($conn));
		
		//ACCESS DB'S STUDENT NAME & ID ------------------------------------
	    while($row = mysqli_fetch_assoc($status))
    	{	
    		$name = $row["Name"];
	    	$id = $row["ID"];

	    	$idArr[$studentCount++] = $id;//creates student array, storing all id's
	    }//-----------------------------------------------------------------
	    
	    //studentNum and studentCount should be the same, one assigned at beginning the other in this method
	    for($x = $studentCount; $x >= 0; $x--)//"x-loop"
	    {
	    	
	    	for($y = $studentCount - 1; $y >= 0; $y--)//"y-loop"
	    	{
	    	
	    		$idX = $idArr[$x];//same id for every y loop
	    		$idY = $idArr[$y];//different id every x and y loop run
	    			
	    		$profileArrX = self::qFileOutX($idX);//stores student 'x' profile array of q's
	    			
	    		$profileArrY = self::qFileOutY($idY);//stores student 'y' profile array of q's 

	    		if($idX != $idY && $idX != 0 && $idY != 0)
	    		{
	    			
	    			$q1x = $profileArrX[0];
	    			$q2x = $profileArrX[1];
	    			$q3x = $profileArrX[2];
	    			$q4x = $profileArrX[3];
	    			$q5x = $profileArrX[4];
	    			$q6x = $profileArrX[5];
	    			$q7x = $profileArrX[6];
	    			$q8x = $profileArrX[7];
	    			$q9x = $profileArrX[8];

	    			$q1y = $profileArrY[0];
	    			$q2y = $profileArrY[1];
	    			$q3y = $profileArrY[2];
	    			$q4y = $profileArrY[3];
	    			$q5y = $profileArrY[4];
	    			$q6y = $profileArrY[5];
	    			$q7y = $profileArrY[6];
	    			$q8y = $profileArrY[7];
	    			$q9y = $profileArrY[8];
			
			
	    		$m = 0;//integer holding match potential
				
				if($q1x != null && $q1y != null)
				{
					if($q1x == $q1y))
					{
						$m++;
					}
				}
				if($q2x != null && $q2y != null)
				{
					if($q1x == $q2y))
					{
						$m++;
					}
				}
				if($q3x != null && $q3y != null)
				{
					if($q3x == $q3y))
					{
						$m++;
					}
				}
				if($q4x != null && $q4y != null)
				{
					if($q4x == $q4y))
					{
						$m++;
					}
				}
				if($q5x != null && $q5y != null)
				{
					if($q5x == $q5y))
					{
						$m++;
					}
				}
				if($q6x != null && $q6y != null)
				{
					if($q6x == $q6y))
					{
						$m++;
					}
				}
				if($q7x != null && $q7y != null)
				{
					if($q7x == $q7y))
					{
						$m++;
					}
				}
				if($q8x != null && $q8y != null)
				{
					if($q8x == $q8y))
					{
						$m++;
					}
				}
				if($q9x != null && $q9y != null)
				{
					if($q9x == $q9y))
					{
						$m++;
					}
				}
				
						//if selected students have liked each other add 3 extra points 
						if(self::getLikes($idX, $idY) === true)
						{
							$m += 3;
						}
						
						$matchData[$idX][$idY] = $m;
				
			    
	    	  }//end if idX != idY method
	    	
	    	
	    	}//end second nested loop (y)
		
	    }//end first nested loop (x)
		
	    return $matchData;
	    
	}//end of match method



	//function to return selected student id's questions, returned as an array
	public static function qFileOutX($id)
	{
    	$sName;
    	$sNum = $sID = $id;
    	

		// build the connection ...
		echo "Attempting to connect to DB server: $host ...";
		$conn = mysqli_connect($host, $user, $pass, $dbName);

		//query (TO BE CHANGED TO ACTUAL DB NAME AND PARAMETERS!!)
	    $queryString = "select q1, q2, q3, q4, q5, q6, q7, q8, q9 from questionsTable ".
               " where author=\"$id\"";

		$status = mysqli_query($conn, $queryString);

		if (!$status) die("Error running query: " . mysqli_error($conn));


		while($row = mysqli_fetch_assoc($status))
    	{
	    	
	    	$sNum = $row["student id"];//assuming correct column name

	    	$q1 = $row["q1"];//assuming 'q1-9' is the correct column name
	    	$q2 = $row["q2"];
	    	$q3 = $row["q3"];
	    	$q4 = $row["q4"];
	    	$q5 = $row["q5"];
	    	$q6 = $row["q6"];
	    	$q7 = $row["q7"];
	    	$q8 = $row["q8"];
	    	$q9 = $row["q9"];
	    	
	    	
	    	if($sNum == $sID)
	    	{
	    		
	    		$qArr[0] = $q1;
	    		$qArr[1] = $q2;
	    		$qArr[2] = $q3;
	    		$qArr[3] = $q4;
	    		$qArr[4] = $q5;
	    		$qArr[5] = $q6;
	    		$qArr[6] = $q7;
	    		$qArr[7] = $q8;
	    		$qArr[8] = $q9;
	    	}
	    	
	    }
		return $qArr;
	}


	//function below same as above to be able to be ran simultaniously 
	//function to return selected student id's questions, returned as an array
	public static function qFileOutY($id)
	{
    	$sName;
    	$sNum = $sID = $id;
    	
	    // build the connection ...
		echo "Attempting to connect to DB server: $host ...";
		$conn = mysqli_connect($host, $user, $pass, $dbName);

		//query (TO BE CHANGED TO ACTUAL DB NAME AND PARAMETERS!!)
	    $queryString = "select q1, q2, q3, q4, q5, q6, q7, q8, q9 from questionsTable ".
               " where author=\"$id\"";

		$status = mysqli_query($conn, $queryString);

		if (!$status) die("Error running query: " . mysqli_error($conn));


		while($row = mysqli_fetch_assoc($status))
    	{
	    	
	    	$sNum = $row["student id"];//assuming correct column name

	    	$q1 = $row["q1"];//assuming 'q1-9' is the correct column name
	    	$q2 = $row["q2"];
	    	$q3 = $row["q3"];
	    	$q4 = $row["q4"];
	    	$q5 = $row["q5"];
	    	$q6 = $row["q6"];
	    	$q7 = $row["q7"];
	    	$q8 = $row["q8"];
	    	$q9 = $row["q9"];
	    	
	    	
	    	if($sNum == $sID)
	    	{
	    		
	    		$qArr[0] = $q1;
	    		$qArr[1] = $q2;
	    		$qArr[2] = $q3;
	    		$qArr[3] = $q4;
	    		$qArr[4] = $q5;
	    		$qArr[5] = $q6;
	    		$qArr[6] = $q7;
	    		$qArr[7] = $q8;
	    		$qArr[8] = $q9;
	    	}
	    	
	    }
		return $qArr;
	}



	//returns true if both inserted student id's have "liked" (matched) each other
	public static function getLikes($matchingID, $matchedID)
	{
		$studentMatches = false;
			

		// build the connection ...
		echo "Attempting to connect to DB server: $host ...";
		$conn = mysqli_connect($host, $user, $pass, $dbName);

		//query (TO BE CHANGED TO ACTUAL DB NAME AND PARAMETERS!!)
	    $queryString = "select studentID_x, studentID_y from likesTable ".
               " where author=\"$matching\"";

		$status = mysqli_query($conn, $queryString);

		if (!$status) die("Error running query: " . mysqli_error($conn));


		while($row = mysqli_fetch_assoc($status))
    	{

		    	$matching = $row["studentID_x"];
		    	$matched = $row["studentID_y"];

		    	if($matching == $matchingID && $matched == $matchedID)
		    	{
		    		$studentMatches = true;
		    	}
		}
		    
		    return $studentMatches;
	}
	


	//returns number of inserted type
	public static function getTeams() //throws IOException
	{
		$matchC = self::matchCoefficient();//calls and stores 2d array of all matches
		$t = teamNum;

		// build the connection ...
		echo "Attempting to connect to DB server: $host ...";
		$conn = mysqli_connect($host, $user, $pass, $dbName);

		if (!$conn) die("Could not connect:".mysqli_connect_error());



	
		
		for($compare = 25; $compare > 0; $compare--)
		{//loop above compares all match coefficients from grater to lesser

			//nested loop extracts data from 2d array 
			for($ix = 100; $ix < 1000; $ix++)
	    	{
	    		for($iy = 101; $iy < 1000; $iy++)
	    		{
	    			if($matchC[$ix][$iy] == $compare)
					{
	    				$ic = $matchC[$ix][$iy];
	    				
	    				if($matchC[$iy][$ix] > 0)//when students like each other										
	    				{
	    					$ic += $matchC[$iy][$ix];
	    					$matchC[$iy][$ix] = 0;//reset field
	    				}
	    				
	    					if($t == 0)//team number assigned to selected couple
	    					{
	    						$t = $teamNum;
	    					}
	    					
	    					
	    					//DB NAME AND COOLUM NAMES BELOW TO BE CHANGED TO MATCH OUR DB's!!!
							//insert each generated match
							$queryString = "insert into generatedMatchesTable". .
              				 " values (\"$t\", \"$ix\", \"$iy\", \"$ic)";
		
							$status = mysqli_query($conn, $queryString);

							if (!$status) die("Error performing insertion: " . mysqli_error($conn));
	    					
	    					$t--;



					}//ends if
	    		}//ends for loop (y)
	    	}//ends for loop (x)
	    
		}//ends 25 loop
	    
	   
	    
	}//end of method








	?>