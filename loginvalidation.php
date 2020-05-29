 <?php
	
	session_start();
   
    require 'server.php';
?>

<?php

	$Username= $_POST['user'];

	$Password= $_POST['pass'];
	


// $designation= $_POST['designation'];

// $sql="SELECT * FROM users";

// $result=mysqli_query($conn,$sql);

//   // Mysql_num_row is counting table row
// $count=mysql_num_rows($result);
// // If result matched $username and $password, table row must be 1 row
// if ($count==1) {
//     echo "Success! $count";
// } else {
//     echo "Unsuccessful! $count";
// }


	$sql= "SELECT * FROM users WHERE username='$Username' AND password='$Password' AND designation ='regular user' ";


	$result= mysqli_query($conn,$sql) or die(mysqli_error($conn));

if(mysqli_num_rows($result))

 {  
 	$_SESSION['authorized']='true';

    $row=mysqli_fetch_array($result);

 	$_SESSION['USER']= $row ['fname'];

 

 	echo "You have successfully logged in!";
   	
   	header("Refresh:2; url=userindex.php");

   
	//session variable to check validation
 

  // echo nl2br("\r\n Validation Successful") ;
} 	
 
 else 
 { 
 	
	echo "Check Login Credentials. Invalid Entry.";
 
	session_unset();
 
	// header("Refresh:2; url=login.php");

 


}


?>
