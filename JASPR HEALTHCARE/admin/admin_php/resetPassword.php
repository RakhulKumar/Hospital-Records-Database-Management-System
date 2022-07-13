<?php
session_start();
include "config.php";
if(isset($_REQUEST['resetPassword']))
{
    if(isset( $_SESSION['username'] ))
    {
        $username = $_SESSION['username'] ;
    }
    $old = $_REQUEST['old_password'];
    $pwd = $_REQUEST['password'];
    $confirm = $_REQUEST['password_confirmation'];
    $sql = "UPDATE login SET password = '$pwd' WHERE username = '$username' ";
    if (mysqli_query($conn, $sql)) {
        echo "<script> window.location.replace('../resetpassword.php?success')</script>";
    } else {
        echo "<script>window.location.replace('../resetpassword.php?error') </script>";
    }
}

?>