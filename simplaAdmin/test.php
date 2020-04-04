<html>
<head>
<title>PHP File Upload example</title>
</head>
<body>







<form action="#" enctype="multipart/form-data" method="post">


Select image :
<input type="file" name="file"><br/>
<input type="submit" value="Upload" name="Submit1"> <br/>


</form>



<?php
if(isset($_POST['Submit1']))
{ 

$filename = "uploadedfile" . $_FILES["file"]["name"];

if(move_uploaded_file($_FILES["file"]["tmp_name"], $filename)) 
{
echo "<img src=".$filename." height=200 width=300 />";
} 
else 
{
echo "Error !!";
}
} 
?>

</body>
</html>