<?php
if(isset($_POST['Submit']))
{ 

$filename = "uploadedfile" . $_FILES["file"]["name"];

if(move_uploaded_file($_FILES["file"]["tmp_name"], $filename)) 
{
header('Location: addproducts.php');
echo "<img src=".$filename." height=500 width=500 />";
} 
else 
{
echo "Error !!";
}
} 
?>