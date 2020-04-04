<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Shop 'n Save | Sign In</title>
<link rel="stylesheet" href="resources/css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="resources/css/invalid.css" type="text/css" media="screen" />	
<script type="text/javascript" src="resources/scripts/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="resources/scripts/simpla.jquery.configuration.js"></script>
<script type="text/javascript" src="resources/scripts/facebox.js"></script>
<script type="text/javascript" src="resources/scripts/jquery.wysiwyg.js"></script>
</head>
  
	<body id="login">
		
		<div id="login-wrapper" class="png_bg">
			<div id="login-top">
			
				<h1>Simpla Admin</h1>
				<!-- Logo (221px width) -->
				<img id="logo" src="resources/images/logo1.png" alt="Simpla Admin logo" />
			</div> <!-- End #logn-top -->
			
			<div id="login-content">
				
				<form action="loginvalidation.php" method="post">
				
					<div class="notification information png_bg">
						<div>
							<p>Regular users are not allowed to access this page, <a href="../fashimain/fashi/index.php">click here</a> to go back to the shop!</p>
						</div>
					</div>
					
					<p>
						<label>Username</label>
						<input class="text-input" type="text" name=user>
					</p>
				

					<div class="clear">
						
					</div>
					<p>
						<label>Password</label>
						<input class="text-input" type="password" name=pass>
					</p>
					

					<div class="clear"></div>
					<p id="remember-password">
						<input type="checkbox" >
						Remember me
					</p>
					<div class="clear"></div>
					

					<p>
						<input class="button" type="submit" value="Sign In" >
					</p>
					
				</form>
			</div> <!-- End #login-content -->
			
		</div> <!-- End #login-wrapper -->
  </body>
</html>
