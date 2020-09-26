<?php
	if (isset($_POST['Submit']))
	{
		require_once('connection.php');

		$username = $_POST['username'];
		$password = $_POST['password'];

		$user_search ="select * from user_registration where username='".$username."'";
		$user_search_query = mysqli_query($con,$user_search);
		 
	 
			
	 

		// if($username == $row)
		// {
		// 	$pass = mysqli_fetch_assoc($user_search_query);

		// 	$db_pass = $pass['password'];

		// 	if($password == $db_pass)
		// 	{
		// 			header("location:index.php");
		// 	}
		// 	else
		// 	{
		// 		echo "<script>alert('Invalid Your Password')</script>";
				
		// 	}
		// }
		// else
		// {
		// 		echo "<script>alert('Invalid Your username')</script>";
		// }
		
	}
?>