
<?php 

include "server.php";

?>



<?php


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
 	
 	echo nl2br("\r\n Record inserted successfully") ;
      header("Refresh:2; url=manageusers.php");

}
}
 else
 {
 	echo "Password fields do not match.";
 }

?>
