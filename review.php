<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contect Us</title>
	<link rel="stylesheet" type="text/css" href="review.css">
</head>
<body>
	<?php
		include 'header1.php';	
	?>							
	<form method="POST">
	<div class="container">
		<h2>Contact Us</h2>    
		<div class="row100">
			<div class="col">
				<div class="inputBox">
					<input type="text" name="firstname" required="required">
					<span class="text">First Name</span>
					<span class="line"></span>
				</div>
			</div>
                                                                        
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
					<input type="text" name="email" required="required">
					<span class="text">Email</span>
					<span class="line"></span>
				</div>
			</div>

			<div class="col">
				<div class="inputBox">
					<input type="text" name="cno" required="required">
					<span class="text">Mobile</span>
					<span class="line"></span>
				</div>
			</div>
		</div>

		<div class="row100">
			<div class="col">
				<div class="inputBox textarea">
					<textarea required="required" name="msg"></textarea>
					<span class="text">Type Your Message Here...</span>
					<span class="line"></span>
				</div>
			</div>
		</div>

		<div class="row100">
			<div class="col">
				<input type="Submit" name="Submit" value="Submit">
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
		$msg = $_POST['msg'];

		$result = mysqli_query($con,"INSERT INTO `feedback`(`firstname`, `lastname`, `email`, `cno`, `msg`, `created_at`) VALUES ('$firstname','$lastname','$email','$cno','$msg','$currentTime')");
			
		if($result)
		{
			echo "<script>alert('yes!')</script>";
		}
		else
		{
		echo "<script>alert('  No!')</script>";		
		}	
			 
	} 
	
?>