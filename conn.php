<?php
/**
 * Created by PhpStorm.
 * User: Btech
 * Date: 8/25/2019
 * Time: 7:24 PM
 */

$conn = new mysqli("localhost","root","","county");
if($conn->connect_error){
    die("Connection failed");
}
?>