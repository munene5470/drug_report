<?php
session_start();
include("includes/connect.php"); //Establishing connection with our database
$error = ""; //Variable for storing our errors.
if(isset($_POST["login"]))
{
    if(empty($_POST["username"]) || empty($_POST["password"]))
    {
        echo"<script>alert('Fill all the fields, please try again!')</script>";
        echo"<script>window.open('index.php', '_self')</script>";
    }else
    {
// Define $username and $password
        //$county=$_POST['county'];
        $username=$_POST['username'];
        $password=$_POST['password'];

// To protect from MySQL injection
        // $county = stripslashes($county);
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysqli_real_escape_string($connect, $username);
        $password = mysqli_real_escape_string($connect, $password);
        $password = md5($password);

//Check username and password from database
        $sql="SELECT * FROM users WHERE username='$username' and password='$password'";
        $result=mysqli_query($connect,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

//If username and password exist in our database then create a session.
//Otherwise echo error.

        if(mysqli_num_rows($result) == 1)
        {
            $_SESSION['user'] = $username; // Initializing Session
            header("location: dashboard.php"); // Redirecting To Other Page
        }else
        {
            echo"<script>alert('Wrong username or password, please try again!')</script>";
            echo"<script>window.open('user_login.php', '_self')</script>";


        }

    }
}

?>