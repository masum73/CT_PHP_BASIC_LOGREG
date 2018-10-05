<?php
    session_start();
    if(isset($_POST['submit']))
    {
        $oldpass = $_POST['oldpassword'];
        $newpass = $_POST['newpassword'];
        $confirmpass = $_POST['confirmpassword'];
        if($oldpass == $_SESSION['password'])
        {
            if($newpass == $confirmpass)
            {
                $conn = mysqli_connect("localhost","root","","phplogin");
                $sql = "update users set password = '". $newpass."' where id =" .$_SESSION['id'];
                if(mysqli_query($conn,$sql))
                {
                    header("Location:logout.php");
                }
                else
                {
                    header("Location:change_pass.php");
                }
            }
            else
            {
                echo "Do not match";
            }
        }
        else
        {
            echo "Sorry old password do not match";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Change Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form method="post" action="#">
        <table>
            <tr>
                <td>Old Password : </td>
                <td><input type="password" name="oldpassword"> </td>
            </tr>
            <tr>
                <td>New Password : </td>
                <td><input type="password" name="newpassword"> </td>
            </tr>
            <tr>
                <td>Confirm Password : </td>
                <td><input type="password" name="confirmpassword"> </td>
            </tr>
            <tr>
                <td> </td>
                <td><input type="submit" name="submit" value="submit"> </td>
            </tr>
        </table>
    </form>
</body>
</html>