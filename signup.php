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
	<form method="POST">
	<div class="container">
		<h2>Sign Up</h2>
		<div class="row100">
			<div class="col">
				<div class="inputBox">
					<input type="text" name="firstname" required="required">
					<span class="text">First Name</span>
					<span class="line"></span>
				</div>
			</div>
		</div>
		<div class="row100">
			<div class="col">
				<div class="inputBox">
					<input type="text" name="lastname" required="required">
					<span class="text">Last Name</span>
					<span class="line"></span>
				</div>
			</div>
		</div>

		<div class="row100">
			<div class="col">
				<div class="inputBox">
					<input type="email" name="email" required="required">
					<span class="text">Email</span>
					<span class="line"></span>
				</div>
			</div>
		</div>
		<div class="row100">
			<div class="col">
				<div class="inputBox">
					<input type="number" name="cno" required="required">
					<span class="text">Mobile</span>
					<span class="line"></span>
				</div>
			</div>
		</div>

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
				<div class="inputBox">
					<input type="text" name="city" required="required">
					<span class="text">City</span>
					<span class="line"></span>
				</div>
			</div>
		</div>

		<div class="row100">
			<div class="col">
				<input type="Submit" name="Submit" value="Sign Up">
			</div>
		</div>
	</div>
</div>
</form>
</body>
</html>

<?php
	include("connection.php");
	date_default_timezone_set('Asia/Kolkata');
	$currentTime = date( 'd-m-Y h:i:s A', time () );
	 
	if(isset($_POST['Submit']))
	{    
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$cno = $_POST['cno'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$city = $_POST['city'];
        
		$result = mysqli_query($con,"INSERT INTO `user_registratiton` (`id`, `firstname`, `lastname`, `email`, `cno`, `username`, `password`, `city`, `created_at`, `updated_at`, `deleted_at`) VALUES (NULL, '$firstname', '$lastname', '$email', '$cno', '$username', '$password', '$city', '$currentTime', '$currentTime', NULL)");
		
		echo "recorde successfully inserted...";
    }
    else
    {
 		echo "recorde not inserted...";	
    }
?>
