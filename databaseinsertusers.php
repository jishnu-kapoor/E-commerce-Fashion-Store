<?php

include "server.php";



$userid=$_POST['uid'];
// var_dump($id);
$firstname=$_POST['fname'];
// var_dump($id);

$lastname=$_POST['lname'];

// var_dump($name);

$username=$_POST['username'];

// var_dump($unit);

$password=$_POST['password'];
// var_dump($description);

$rpassword=$_POST['rpassword'];


$designation=$_POST['RoleType'];





	$sql= "INSERT INTO users (`uid`,`fname`,`lname`,`username`,`password`, `designation`)
       
       VALUES ('$userid','$firstname','$lastname','$username','$password','$designation')";

       // INSERT INTO products( `productid`, `name`, `unit`, `description`, `category` ) VALUES( 101, 'ygtytytyr', 5, 'hq surround', 'earphones' )
// echo $sql;


if($password == $rpassword)
{	
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
// var_dump($sql);


	 if(isset($result))
{
 	
 	echo(" Records inserted successfully! You will now be re-directed to login. ") ;
 	// echo nl2br("\r\n Records inserted successfully!") ;
    header("Refresh:3; url=login.php");

}
}
 	else
{
 	echo "Password fields do not match! Please click the back button on your browser to check your credentials and register.";
 	// header("Refresh:3; url=register.php");


}




?>