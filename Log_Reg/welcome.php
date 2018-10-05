<?php
    session_start();
    if(isset($_SESSION['username']))
    {
        echo "Welcome " . $_SESSION['username'];
        echo "<a href='logout.php' > Log Out </a>";
        echo "<a href='change_pass.php' > Change Password </a>";
        
    }
    else
    {
        header("Location:index.php");
    }
?>