
<?php
include("includes/connect.php");

if (isset($_GET['delete'])){
    $delete_id=$_GET['delete'];
    $delete_query="delete  from users WHERE id='$delete_id'";//delete query
    $run=mysqli_query($connect,$delete_query);

    $_SESSION['message'] = "User has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: view_users.php");

}
?>