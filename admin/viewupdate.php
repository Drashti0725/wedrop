<?php
	require_once("connection.php");
	if(isset($_POST['update']))
	{
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $cno = $_POST['cno'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $city = $_POST['city'];

        $query =" UPDATE `user_registratiton` SET `firstname`='".$firstname."',`lastname`='".$lastname."',`email`='".$email."',`cno`='".$cno."',`username`='".$username."',`password`='".$password."',`city`='".$city."' WHERE id='".$id."' ";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:dispuser.php");
        }        
        
	}
    else
	{
		header("location:regview.php");
	}
?>