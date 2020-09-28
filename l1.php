<?php
		include("connection.php");
        session_start();
        	
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = " select * from user_registratiton ";
        $result = mysqli_query($con,$query);
         

        while($row=mysqli_fetch_assoc($result))
        {
                  $db_user = $row['username'];
                  $db_password = $row['password'];
        }
        if($db_user == $username)
        {
            if($db_password == $password)
            {
                    header("location:index.html");
            }   
            else
            {
                header("location:login.php");
                echo "<script>alert('Password Invalid...!')</script>";  
            }
        }
        else
        {
            header("location:login.php");
            echo "<script>alert('User Name Invalid...!')</script>";
        }

?>