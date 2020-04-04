<?php 
session_start();



if(!$_SESSION['authorized'])
{
	header('Location: login.php');


}
include "server.php";
include "sidebar.php";

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

							
	<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
		

		
		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			<h2>Welcome John</h2>
			<p id="page-intro">What would you like to do?</p>
			

				

			

			
			<div class="content-box"><!-- Start Content Box -->
				
				<br>
					
					<h3>Add a user to table</h3>
					<br>
					
	                <div class="tab-content" id="tab2">
					
						<form action="databaseinsertusers.php" method="post">
							

							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
									<div class="notification attention png_bg">
							<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div>
								Add your product here, Close this notification with the top-right cross.
							</div>
						</div>
						
						<p>
									<label>User ID</label>
									
										<input class="text-input small-input" type="text" id="small-input" name="uid" /> 



										<span class="input-notification success png_bg">Successful message</span> 
										
										<!-- Classes for input-notification: success, error, information, attention -->
										
										<br /><small>A small description of the field</small>
								<p>
									<label>First Name</label>
									
										<input class="text-input small-input" type="text" id="small-input" name="fname" /> 



										<span class="input-notification success png_bg">Successful message</span> 
										
										<!-- Classes for input-notification: success, error, information, attention -->
										
										<br /><small>A small description of the field</small>
								</p>
								<p>
									<label>Last Name</label>
									
										<input class="text-input small-input" type="text" id="small-input" name="lname" /> 



										<span class="input-notification success png_bg">Successful message</span> 
										
										<!-- Classes for input-notification: success, error, information, attention -->
										
										<br /><small>A small description of the field</small>
								</p>

                                <p>
									<label>Enter a username</label>
									
										<input class="text-input small-input" type="text" id="small-input" name="username" /> 



										<span class="input-notification success png_bg">Successful message</span> 
										
										<!-- Classes for input-notification: success, error, information, attention -->
										
										<br /><small>A small description of the field</small>
								</p>
								<p>
									<label>Enter a password</label>
									
										<input class="text-input small-input" type="password" id="small-input" name="password" /> 



										<span class="input-notification success png_bg">Successful message</span> 
										
										<!-- Classes for input-notification: success, error, information, attention -->
										
										<br /><small>A small description of the field</small>`
								</p>
								<p>
									<label>Re-type password</label>
									
										<input class="text-input small-input" type="password" id="small-input" name="rpassword" /> 



										<span class="input-notification success png_bg">Successful message</span> 
										
										<!-- Classes for input-notification: success, error, information, attention -->
										
										<br /><small>A small description of the field</small>
								</p>
											
											<p>


									<label>Select the user's designation</label>
									
						<p>
							
<select name="RoleType">


<option value="regular user">Regular User</option>

<option value="admin">Admin</option>

</select>

</p>
								</p> 		
							<!-- 	
								<p>
									<label>Medium form input</label>
									<input class="text-input medium-input datepicker" type="text" id="medium-input" name="medium-input" /> <span class="input-notification error png_bg">Error message</span>
								</p>
								
								<p>
									<label>Large form input</label>
									<input class="text-input large-input" type="text" id="large-input" name="large-input" />
								</p>
								 -->
							<!-- 	<p>
									<label>Checkboxes</label>
									<input type="checkbox" name="checkbox1" /> This is a checkbox <input type="checkbox" name="checkbox2" /> And this is another checkbox
								</p>
								
								<p>
									<label>Radio buttons</label>
									<input type="radio" name="radio1" /> This is a radio button<br />
									<input type="radio" name="radio2" /> This is another radio button
								</p> -->
								
								<!-- <p>
									<label>This is a drop down list</label>              
									<select name="dropdown" class="small-input">
										<option value="option1">Option 1</option>
										<option value="option2">Option 2</option>
										<option value="option3">Option 3</option>
										<option value="option4">Option 4</option>
									</select> 
								</p> -->
								
								<!-- <p>
									<label>Textarea with WYSIWYG</label>
									<textarea class="text-input textarea wysiwyg" id="textarea" name="textfield" cols="79" rows="15"></textarea>
								</p> -->
								
								<p>
									<input class="button" type="submit" value="Insert to table" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->  
		


			</div> <!-- End .content-box -->
			
		
			

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