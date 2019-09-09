<?php
session_start();
include ("includes/connect.php");
$user =$_GET['update_password'];
$new_pass=md5($_POST['newpass']);
$confirm_pass=md5($_POST['confirm']);
if(count($_POST)>0) {
    $result = mysqli_query($connect,"SELECT *from users WHERE name='" . $user . "'");
    $row=mysqli_fetch_array($result);
    if($new_pass == $confirm_pass) {
        mysqli_query($connect,"UPDATE admin set password='" . $new_pass . "' WHERE username='" . $user . "'");
        echo "Password Changed Sucessfully";
    } else{
        echo  "Password not changed";
    }
}
?>