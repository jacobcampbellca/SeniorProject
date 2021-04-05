  <!--
    MAIN AUTHOR: Justin P.
	Comments/Formatting done by: Justin P.
  -->
  
<?php
        // Signs the user out and returns them to the homepage
    session_start();
    if(session_destroy())
    {
        header("location: index.php");
    }
?>