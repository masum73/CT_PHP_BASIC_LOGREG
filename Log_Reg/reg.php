<?php
    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];
        
        $error = 1;

        if($error)
        {
            $conn = mysqli_connect("localhost","root","","phplogin");
            $sql = "INSERT INTO `users`(`id`, `username`, `password`, `email`) VALUES ('','".$username."','".$pass."','".$email."')" ; 
            
            if(mysqli_query($conn,$sql))
            {
                header("Location:index.php");
            }
            else
            {
                header("Location:reg.php");
            }
        }
        else
        {
            header("Location:reg.php");
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form method="post" action="#">
        <table>
            <tr>
                <td>Username : </td>
                <td><input type="text" name="username"> </td>
            </tr>
            <tr>
                <td>Email : </td>
                <td><input type="text" name="email"> </td>
            </tr>
            <tr>
                <td>Password : </td>
                <td><input type="password" name="pass"> </td>
            </tr>
            <tr>
                <td>Confirm Password : </td>
                <td><input type="password" name="cpass"> </td>
            </tr>
            <tr>
                <td> </td>
                <td><input type="submit" name="submit" value="Submit"> </td>
            </tr>
        </table>
    </form>
</body>
</html>
