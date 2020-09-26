<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
	<?php  
		include 'header1.php';
	?>
	<form method="POST" action="loginpro.php">
	<div class="container">
		<h2>Login</h2>
		<div class="row100">
			<div class="col">
				<div class="inputBox">
					<input type="text" name="username" required="required">
					<span class="text">User Name</span>
					<span class="line"></span>
				</div>
			</div>
		</div>

		<div class="row100">
			<div class="col">
				<div class="inputBox">
					<input type="password" name="password" required="required">
					<span class="text">Password</span>
					<span class="line"></span>
				</div>
			</div>
		</div>

		<div class="row100">
			<div class="col">
				<input type="Submit" name="Submit" value="Login">
			</div>
		</div>
	</div>
</div>
</form>
 
 
</body>
</html>

