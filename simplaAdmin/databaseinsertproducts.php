
<?php 

include "server.php";

?>



<?php

$image=$_FILES['image']['name'];

	if(isset($_POST['Submit']))
{ 

	if(move_uploaded_file($_FILES["image"]["tmp_name"],"images/". $image)) 

{

// header('Location: addproducts.php');

// echo "<img src=".$image." height=100 width=100 />";

} 
else 
{
echo "Error !!";
}
} 


// $_FILES['image']= $img;





$id=$_POST['pid'];
// var_dump($id);

$name=$_POST['pname'];

// var_dump($name);

$unit=$_POST['unit'];

// var_dump($unit);

$description=$_POST['pdescription'];
// var_dump($description);

$category=$_POST['pcategory'];
// var_dump($category);



$sql= "INSERT INTO products (`image`,`productid`,`name`,`unit`,`description`,`category`)
       
       VALUES ('$image','$id','$name','$unit','$description','$category')";

       // INSERT INTO products( `productid`, `name`, `unit`, `description`, `category` ) VALUES( 101, 'ygtytytyr', 5, 'hq surround', 'earphones' )
// echo $sql;



$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
// var_dump($sql);

 if(isset($result))
 {
 	
 	echo nl2br("\r\n Records inserted successfully") ;
      header("Refresh:2; url=manageproducts.php");

 }
 else
 {
 	echo "No value found";
 }

?>
