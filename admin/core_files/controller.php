<?php
session_start();
include_once 'config.php';

if (isset($_POST['login'])) {
    // print_r($_POST);die;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $query = "SELECT username,role FROM login WHERE username = '$username' AND  password = '$password' AND  role = '$role'";
    // echo $query;die;
    if ($result=mysqli_query($conn,$query)) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            // echo $row['role'];die;
            $_SESSION['role'] = $row['role'];
            $_SESSION['username'] = $row['username'];
            // $names=$row['name'];
            // echo $names;die;
            // $_SESSION['scan'] = $row['s'];
            // $_SESSION['username'] = $row['username'];
            if($_SESSION['role'] == 'admin')
            {
                header("Location: ../dashboard.php");
            }
            elseif ($_SESSION['role'] == 'doctor')
            {
                header("Location: ../doctorPersonalInfo.php?value=$username");
            }
            elseif ($_SESSION['role'] == 'user')
            {
                header("Location: ../userPersonalInfo.php?value=$username");
            }elseif ($_SESSION['role'] == 'scan')
            { 
                
                header("Location: ../scan_center.php?value=$username");
            }
            elseif ($_SESSION['role'] == 'lab')
            {
                header("Location: ../lab.php?value=$username");
            }



        } else {
            header("Location: ../login.php?message=Invalid");
        }
    }

}
if(isset($_POST['forgot_password'])) {
    /*check username exist or not*/
    $username = $_POST['email'];
    $query = "SELECT username,password FROM login WHERE username = '$username'";
    if ($result=mysqli_query($conn,$query)) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $user = $row['username'];
            $password = $row['password'];
            $to = $_POST['email'];
            $mail_subject = "Hi ! Here your password";
            $subject = "Forgot password enquiry mail..";
            $message = "<h2><center>Your Account Login details</center></h2><br /><table xmlns=\"http://www.w3.org/1999/html\">";
            $message.="<thead><tr><td colspan='2'><center><b>$mail_subject</b></center></td></tr></thead>";
            $message.="<tr><td><b>Username :</b></td>";
            $message.="<td> $user</td></tr>";
            $message.="<tr><td><b>Password :</b></td>";
            $message.="<td> $password</td></tr></table>";

            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
            $headers .= "From: webmaster@clinicalservice.com" . "\r\n";
            mail($to,$subject,$message,$headers);

            header("Location: ../forgotpassword.php?message=success");
        } else {
            header("Location: ../forgotpassword.php?message=Invalidmail");

        }
    }

}

