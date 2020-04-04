
<?php 
session_start();



if(!$_SESSION['authorized'])
{
	header('Location: login.php');


}
include "server.php";


?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Simpla Admin</title>
<link rel="stylesheet" href="resources/css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="resources/css/invalid.css" type="text/css" media="screen" />	
<script type="text/javascript" src="resources/scripts/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="resources/scripts/simpla.jquery.configuration.js"></script>
<script type="text/javascript" src="resources/scripts/facebox.js"></script>
<script type="text/javascript" src="resources/scripts/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="resources/scripts/jquery.datePicker.js"></script>
<script type="text/javascript" src="resources/scripts/jquery.date.js"></script>
</head>




<?php 



$sql="SELECT * FROM users";

$result=mysqli_query($conn,$sql);

?>							
	


	<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
		
<?php include "sidebar.php" ?>
			
		</div></div> <!-- End #sidebar -->
		
		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			<!-- <h2>Welcome John</h2>
			<p id="page-intro">What would you like to do?</p> -->
			

			
			<div class="clear"></div> <!-- End .clear -->

				
			
				
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3 style="cursor: s-resize;">Registered Users</h3>
					
					
		
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1" style="display: none;"> <!-- This is the target div. id must match the href of this div's tab -->
						
						<div class="notification attention png_bg">
							<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close"></a>
							<div>
								Edit and Delete your product here, Close this notification with the top-right cross.
							</div>
						</div>
						
						<table>
							
							<thead>
								<tr>
								 <!--   <th><input class="check-all" type="checkbox"></th> -->
								 
                                   <th>Selection</th>
								   <th>First Name</th>
								   <th>Last Name</th>
								   <th>Username</th>
								   <th>User ID</th>
								   <th>Designation</th>
								   <th>Action</th>
								  

								  
								
								
							</thead>
						 
							<tfoot>
								<tr>
									<td colspan="6">
										<div class="bulk-actions align-left">
											<select name="dropdown">
												<option value="option1">Choose an action...</option>
												<option value="option2">Edit</option>
												<option value="option3">Delete</option>
											</select>
											<a class="button" href="#">Apply to selected</a>
										</div>
										
										<div class="pagination">
											<a href="#" title="First Page">« First</a><a href="#" title="Previous Page">« Previous</a>
											<a href="#" class="number" title="1">1</a>
											<a href="#" class="number" title="2">2</a>
											<a href="#" class="number current" title="3">3</a>
											<a href="#" class="number" title="4">4</a>
											<a href="#" title="Next Page">Next »</a><a href="#" title="Last Page">Last »</a>
										</div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
						 
		
			<?php

while($rows= mysqli_fetch_array($result))

{

?>				
							<tbody>




                               

								<tr class="alt-row"> <th><input class="check-all" type="checkbox"></th>
									
									<td>
								  
								



<?php
echo $rows ['fname'];

?>
										
									</td>
									

									<td>
										
<?php
echo $rows ['lname'];

?>
									</td>
									<td>
<?php
echo $rows ['username'];

?>
									<td>

<?php

echo $rows ['uid'];

?>
	
</td>
<td>
<?php

echo $rows ['designation'];

?>
</td>





<td>
									
										 <a href="editusers.php?toedit=

										 <?php echo $rows ['sno'];?>" 
										 	
										 	title="Edit">
										 	
										 	<img src="resources/images/icons/pencil.png" alt="Edit"></a>
										 
										 <a href="databasedeleteusers.php?todelete=
										 
										 <?php echo $rows ['sno'];?>" 
										 
										 title="Delete"><img src="resources/images/icons/cross.png" alt="Delete"></a> 
										 
									</td>
									
								<!-- <tr>
									<td><input type="checkbox"></td>
									<td>Lorem ipsum dolor</td>
									<td><a href="#" title="title">Sit amet</a></td>
									<td>Consectetur adipiscing</td>
									<td>Donec tortor diam</td>
									<td>
										Icons
										 <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit"></a>
										 <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete"></a> 
										 
									</td>
								</tr> -->
								

													</tbody>
							
								<?php
}
?>	
	
							
							


						</table>
						
					</div> <!-- End #tab1 -->
					
					<div class="tab-content" id="tab2" style="display: block;">
					
						<form action="" method="post">
							

							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
									<div class="notification attention png_bg">
							<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close"></a>
							<div>
								Add your product here, Close this notification with the top-right cross.
							</div>
						</div>
						
								<p>
									<label>Product ID</label>
									
										<input class="text-input small-input" type="text" id="small-input" name="small-input"> 



										<span class="input-notification success png_bg">Successful message</span> 
										
										<!-- Classes for input-notification: success, error, information, attention -->
										
										<br><small>A small description of the field</small>
								</p>
								
								<p>
									<label>Product Name</label>
									<input class="text-input medium-input datepicker" type="text" id="medium-input" name="medium-input"> <span class="input-notification error png_bg">Error message</span>
								</p>
								
								<p>
									<label>Product Unit</label>
									
										<input class="text-input small-input" type="text" id="small-input" name="small-input1"> 



										<span class="input-notification success png_bg">Successful message</span> 
										
										<!-- Classes for input-notification: success, error, information, attention -->
										
										<br><small>A small description of the field</small>
								</p>
								
								<p>
									<label>Product Description</label>
									<input class="text-input large-input" type="text" id="large-input" name="large-input">
								</p>
								
								<p>
									<label>Checkboxes</label>
									<input type="checkbox" name="checkbox1"> This is a checkbox <input type="checkbox" name="checkbox2"> And this is another checkbox
								</p>
								
								<p>
									<label>Radio buttons</label>
									<input type="radio" name="radio1"> This is a radio button<br>
									<input type="radio" name="radio2"> This is another radio button
								</p>
								
								<p>
									<label>This is a drop down list</label>              
									<select name="dropdown" class="small-input">
										<option value="option1">Option 1</option>
										<option value="option2">Option 2</option>
										<option value="option3">Option 3</option>
										<option value="option4">Option 4</option>
									</select> 
								</p>
								
								<p>
									<label>Textarea with WYSIWYG</label>
									<div class="wysiwyg" style="width: 653px;"><ul class="panel"><li><a class="bold"><!-- --></a></li><li><a class="italic"><!-- --></a></li><li class="separator"></li><li><a class="createLink"><!-- --></a></li><li><a class="insertImage"><!-- --></a></li><li class="separator"></li><li><a class="h1"><!-- --></a></li><li><a class="h2"><!-- --></a></li><li><a class="h3"><!-- --></a></li><li class="separator"></li><li><a class="increaseFontSize"><!-- --></a></li><li><a class="decreaseFontSize"><!-- --></a></li><li class="separator"></li><li><a class="removeFormat"><!-- --></a></li></ul><div style="clear: both;"><!-- --></div><iframe id="textareaIFrame" style="min-height: 250px; width: 645px;"></iframe></div><textarea class="text-input textarea wysiwyg" id="textarea" name="textfield" cols="79" rows="15" style="display: none;"></textarea>
								</p>
								
								<p>
									<input class="button" type="submit" value="Submit">
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div>
					

			
		
			

			<div class="clear"></div>
			
			
		
			
			<div id="footer">
				<small> <!-- Remove this notice or replace it with whatever you want -->
						&#169; Copyright 2009 Your Company | Powered by <a href="http://themeforest.net/item/simpla-admin-flexible-user-friendly-admin-skin/46073">Simpla Admin</a> | <a href="#">Top</a>
				</small>
			</div><!-- End #footer -->
			
		</div> <!-- End #main-content -->
	</div></body>
</html>
F