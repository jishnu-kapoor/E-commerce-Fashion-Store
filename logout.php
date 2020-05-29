<?php

session_start();

// if(isset(!$_SESSION['sidebar']))
//  {
// echo "No Session Found!, Redirecting you to log in." ;

// header("Refresh :2 ; url=login.php");
//  }

if(isset($_SESSION['authorized']))
{ 
     
    echo "You are logged out successfully." ;
    
    session_destroy();
 	
	header("Refresh:2; url=index.php");


}	
 else
  	
{

  	echo "No Active Sessions Found! Please Log-in to continue.";

    header("Refresh:3; url=login.php");

    session_destroy();
}


    
?>