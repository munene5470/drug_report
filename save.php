<?php
/**
 * Created by PhpStorm.
 * User: Btech
 * Date: 8/25/2019
 * Time: 7:26 PM
 */
session_start();
include 'conn.php';

extract($_POST);

$sql = "INSERT INTO reports(county,changaa,kangara,t_drinks,alcohol_poored,equipment,spirits,ethanol,rolls,plants,brooms,stones,kgs,cocaine,arrests,number_charged,fines) 
VALUES ('$county',$changaa,$kangara,$t_drinks,$poored,$equipment,$generation,$ethanol,$rolls,$plants,$brooms,$stones,$kgs,$cocaine,$arrests,$charged,$fines)";

if($link->query($sql)){
    echo "Success";
}else{
    echo "failed";
    echo $link->error;
}