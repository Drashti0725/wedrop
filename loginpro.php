<?php


		include("connection.php");
		//session_start();
		//$_SESSION['yes']="no";
		 
		 oy aa file kaik gote chali gy che hve aa nirate karis zeel no call aviya mare javu padse ane kaik kam che so ho n hmna avu ho 

		if(isset($_POST['Submit']))
		{
			    $username=$_POST['username'];
				$password=$_POST['password'];

				$user_search ="select * from user_registration ";
				echo "1";
				$user_search_query = mysqli_query($con,$user_search);
				echo "2";
				$pass = mysqli_fetch_assoc($user_search_query);
				echo "3";
				$db_user = $pass['username'];
				 
				 echo $db_user;

				// if()
				// {
				// 	$pass = mysqli_fetch_assoc($user_search_query);

				// 	$db_pass = $pass['password'];


				// 	if($db_pass == $password)
				// 	{
				// 		 echo  "drashti";
				// 	}
				// 	else
				// 	{
				// 		//echo "<script>alert('Invalid Your Password!')</script>";
				// 	}
				// }
				// else
				// {
				// 	//echo "<script>alert('Invalid User Name!')</script>";
				// }
		}
		else
		{
			//header("location:login.php");
		}

?>