<?php 

include "server.php";

?>


<?php

$sno=$_GET['todelete'];

// var_dump($id);

$sql= "DELETE FROM products WHERE sno= '$sno' ";


       // INSERT INTO products( `productid`, `name`, `unit`, `description`, `category` ) VALUES( 101, 'ygtytytyr', 5, 'hq surround', 'earphones' )
// echo $sql;



$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
// var_dump($sql);

 if(isset($result))
 {
 	
 	echo nl2br("\r\n Record deleted successfully") ;
      header("Location: manageproducts.php");
 	
 	// redirect


 }
 else
 {
 	echo "No value found"; 
 }

?>
