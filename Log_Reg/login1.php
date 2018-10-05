<?php

    session_start();

    if(isset($_POST['login']))
    {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $error = 1 ;

        if($error)
        {
            $conn = mysqli_connect("localhost","root","","phplogin");

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "select * from users where username = '".$username."' and password = '".$password."'" ;

            $result = mysqli_query($conn , $sql);

            $user = mysqli_fetch_assoc($result);

            if(mysqli_num_rows($result))
            {
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['id'] = $user['id'];
            }
            if(mysqli_num_rows($result))
            {
                header("Location:welcome.php");
            }
            else
            {
                header("Location:index.php");
            }
        }
    }
?>