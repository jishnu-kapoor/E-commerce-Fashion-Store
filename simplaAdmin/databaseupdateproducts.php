
<?php 

include "server.php";

?>



<?php

$sno= $_GET['toedit1']; 

 

$image=$_FILES['image']['name'];

	if(isset($_POST['Submit']))
{ 

	if(move_uploaded_file($_FILES["image"]["tmp_name"],"images/". $image)) 

{

// header('Location: addproducts.php');

// echo "<img src=".$image." height=100 width=100 />";
	echo "Image Uploaded !!";

} 
else 
{
echo "Error !!";
}
}

// $image=$_POST['image'];

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



$sql= "UPDATE products 
       
       SET productid='$id',
       image='$image',
       name='$name',
       unit='$unit',
       description='$description',
       category='$category'

       WHERE sno= '$sno' ";



       // INSERT INTO products( `productid`, `name`, `unit`, `description`, `category` ) VALUES( 101, 'ygtytytyr', 5, 'hq surround', 'earphones' )
// echo $sql;



$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
// var_dump($sql);

 if(isset($result))
 {
 	
 	echo nl2br("\r\n Record updated successfully") ;
      header("Refresh:2; url=manageproducts.php");
 	// redirect


 }
 else
 {
 	echo "No value found";
 }

?>
