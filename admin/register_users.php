<?php
include("includes/connect.php");

//check whether the sign_up button is clicked
if(isset($_POST['register'])){
    $county = htmlentities(mysqli_escape_string($connect ,$_POST['county']));
    $name = htmlentities(mysqli_escape_string($connect ,$_POST['username']));
    $pass = md5($_POST['password']);



    if ($name == ''){
        echo"<script>alert('We cant verify your name')</script>";
    }
    if(strlen($pass)<8){
        echo"<script>alert('Password should be minimum 8 characters')</script>";
        exit();
    }

    $check_username = "select * from users where username = '$name'";
    $run_username = mysqli_query($connect, $check_username);

    $check = mysqli_num_rows($run_username);

    if($check==1){
        echo"<script>alert('Username already exist, please try again!')</script>";
        echo"<script>window.open('add_users.php', '_self')</script>";
        exit();
    }
    $insert = "insert into users (county, username, password) values ('$county','$name','$pass')";

    $query=mysqli_query($connect,$insert);

    if($query){
        echo"<script>alert('$name, you have successfully registered')</script>";
        echo"<script>window.open('dashboard.php', '_self')</script>";
    }else{
        echo"<script>alert('Registration Failed, please try again!')</script>";
        echo"<script>window.open('add_users.php', '_self')</script>";
    }

}

?>
