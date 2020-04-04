
<?php 

include "server.php";

?>



<?php


$sno=$_GET['toedit1'];

// get id from the url where the click has been made passed in editusers.php

$uid=$_POST['uid'];


$fname=$_POST['fname'];
// var_dump($id);

$lname=$_POST['lname'];

// var_dump($name);

$username=$_POST['username'];

// var_dump($unit);

$password=$_POST['password'];
// var_dump($description);

$rpassword=$_POST['rpassword'];


// var_dump($id);

$designation = $_POST['RoleType'];




$sql= "UPDATE users 
       
       SET 
       uid='$uid',
       fname='$fname',
       lname='$lname',
       username='$username',
       password='$password',
       designation='$designation'
       

       WHERE sno= $sno";



       // INSERT INTO products( `productid`, `name`, `unit`, `description`, `category` ) VALUES( 101, 'ygtytytyr', 5, 'hq surround', 'earphones' )
// echo $sql;


if($password == $rpassword)
{
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
// var_dump($sql);

 if(isset($result))
 {
 	
 	echo nl2br("\r\n Record updated successfully") ;
    header("Refresh:2; url=manageusers.php");
    
 	// redirect


}
}
 else
 {
 	echo "Password fields do not match.";
 }

?>
